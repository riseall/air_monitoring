from flask import Flask, request, jsonify
import joblib  # atau library lain yang digunakan untuk model AI
import numpy as np

app = Flask(__name__)

# Load model AI
model = joblib.load('model.pkl')

@app.route('/predict', methods=['POST'])
def predict():
    data = request.json
    features = np.array([
        data['co2'],
        data['no2'],
        data['co'],
        data['benzene'],
        data['toluene'],
        data['pm25'],
        data['temperature'],
        data['humidity']
    ]).reshape(1, -1)
    
    prediction = model.predict(features)
    aqi = prediction[0]
    
    # Menentukan kategori berdasarkan nilai AQI
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
    
    return jsonify({'aqi': aqi, 'category': category})

if __name__ == '__main__':
    app.run(debug=True)
