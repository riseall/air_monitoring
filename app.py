from flask import Flask, jsonify
import joblib
import numpy as np
import mysql.connector
import time
from threading import Thread

app = Flask(__name__)

# Load model AI
model = joblib.load('model_baru.pkl')

def predict(data):
    features = np.array([
        data['co2'],
        data['no2'],
        data['co'],
        data['benzene'],
        data['toluene'],
        data['pm25']
    ]).reshape(1, -1)
    
    prediction = model.predict(features)
    aqi = prediction[0]
    
    if aqi <= 50:
        category = 'Good'
    elif aqi <= 100:
        category = 'Moderate'
    elif aqi <= 150:
        category = 'Unhealthy for Sensitive Groups'
    elif aqi <= 200:
        category = 'Unhealthy'
    elif aqi <= 300:
        category = 'Very Unhealthy'
    else:
        category = 'Hazardous'
    
    return {'aqi': aqi, 'category': category}

def check_database():
    conn = mysql.connector.connect(
        host='127.0.0.1',
        user='root',
        password='',
        database='airmonitoring'
    )
    cursor = conn.cursor(dictionary=True)
    cursor.execute("SELECT * FROM sensor_data WHERE aqi IS NULL ORDER BY tanggal DESC LIMIT 1")
    latest_data = cursor.fetchone()
    if latest_data:
        data = {
            'co2': latest_data['co2'],
            'no2': latest_data['no2'],
            'co': latest_data['co'],
            'benzene': latest_data['benzene'],
            'toluene': latest_data['toluene'],
            'pm25': latest_data['pm25']
        }
        result = predict(data)
        print(f"Predicted AQI: {result}")
        
        # Update the database with the AQI and category
        cursor.execute("""
            UPDATE sensor_data 
            SET aqi = %s, category = %s 
            WHERE id = %s
        """, (result['aqi'], result['category'], latest_data['id']))
        conn.commit()
    cursor.close()
    conn.close()

def start_polling():
    while True:
        check_database()
        time.sleep(5)  # Poll every 10 seconds

@app.route('/test', methods=['GET'])
def test():
    return jsonify({"message": "Flask server is running!"})

if __name__ == '__main__':
    polling_thread = Thread(target=start_polling)
    polling_thread.start()
    app.run(debug=True, port=5000)
