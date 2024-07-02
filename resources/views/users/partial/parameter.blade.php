                <div
                    class="border-black/12.5 shadow-lg relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-2xl border-b-0 border-solid bg-white p-6">
                        <div class="w-full bg-white rounded-lg -mb-32">
                            <div class="text-center pb-3">
                                <span class="font-bold text-slate-800 text-xl">Polutan Udara</span>
                            </div>
                            <div class="relative grid lg:grid-cols-6 md:grid-cols-3 sm:grid-cols-2 gap-8 z-20 pt-4">
                                <div class="cardpar">
                                    <img src="./assets/img/parameter/pm25.png" alt="CO2" class="h-10 w-10">
                                    <div class="py-2">
                                        <span class="font-extrabold text-slate-800">{{ $data->pm25 }}</span>
                                        <i
                                            class="text-sm leading-normal font-weight-bolder text-lime-500">ug/m<sup>3</sup></i>
                                    </div>
                                    <span class="textpar">PM2.5</span>
                                </div>
                                <div class="cardpar">
                                    <img src="./assets/img/parameter/co2.png" alt="CO2" class="h-10 w-10">
                                    <div class="py-2">
                                        <span class="font-extrabold text-slate-800">{{ $data->co2 }}</span>
                                        <i class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</i>
                                    </div>
                                    <span class="textpar">CO<sub>2</sub></span>
                                </div>
                                <div class="cardpar">
                                    <img src="./assets/img/parameter/co.png" alt="CO" class="h-10 w-10">
                                    <div class="py-2">
                                        <span class="font-extrabold text-slate-800">{{ $data->co }}</span>
                                        <i class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</i>
                                    </div>
                                    <span class="textpar">CO</span>
                                </div>
                                <div class="cardpar">
                                    <img src="./assets/img/parameter/benzene.png" alt="Benzena" class="h-10 w-10">
                                    <div class="py-2">
                                        <span class="font-extrabold text-slate-800">{{ $data->benzene }}</span>
                                        <i class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</i>
                                    </div>
                                    <span class="textpar">Benzena</span>
                                </div>
                                <div class="cardpar">
                                    <img src="./assets/img/parameter/toluene.png" alt="Toluene" class="h-10 w-10">
                                    <div class="py-2">
                                        <span class="font-extrabold text-slate-800">{{ $data->toluene }}</span>
                                        <i class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</i>
                                    </div>
                                    <span class="textpar">Toluene</span>
                                </div>
                                <div class="cardpar">
                                    <img src="./assets/img/parameter/no2.png" alt="NO2" class="h-10 w-10">
                                    <div class="py-2">
                                        <span class="font-extrabold text-slate-800">{{ $data->no2 }}</span>
                                        <i class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</i>
                                    </div>
                                    <span class="textpar">NO<sub>2</sub></span>
                                </div>
                            </div>
                        </div>
                        <div class="relative w-full h-64"> <!-- Adjust height as needed -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                                class="absolute inset-0 z-10 w-full h-full">
                                <path fill="#0099ff" fill-opacity="0.1"
                                    d="M0,96L48,122.7C96,149,192,203,288,202.7C384,203,480,149,576,138.7C672,128,768,160,864,192C960,224,1056,256,1152,250.7C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                                class="absolute inset-0 z-10 w-full h-full">
                                <path fill="#0099ff" fill-opacity="0.4"
                                    d="M0,288L48,277.3C96,267,192,245,288,245.3C384,245,480,267,576,256C672,245,768,203,864,154.7C960,107,1056,53,1152,42.7C1248,32,1344,64,1392,80L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                                class="absolute inset-0 z-10 w-full h-full">
                                <path fill="#0099ff" fill-opacity="0.3"
                                    d="M0,32L48,53.3C96,75,192,117,288,165.3C384,213,480,267,576,272C672,277,768,235,864,213.3C960,192,1056,192,1152,170.7C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                                class="absolute inset-0 z-10 w-full h-full">
                                <path fill="#0099ff" fill-opacity="0.2"
                                    d="M0,224L48,224C96,224,192,224,288,197.3C384,171,480,117,576,90.7C672,64,768,64,864,80C960,96,1056,128,1152,165.3C1248,203,1344,245,1392,266.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
