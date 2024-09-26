<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    
    
    <title>ECEWS SkyWatch</title>

    <?php include 'includes/securityUpdate.php'; ?>

        


</head>
<body>


            <div class="logo">
        
                <img id="Ecews_logo" src="images/ECEWS Logo 1.jpg" alt="ECEWS logo">
                <img id="skywatch" src="images/skywatch logo.svg" alt="SkyWatch logo">
                <!-- <img id="menu-icon" src="images/menu.svg" alt="Menu" class="menu-icon">
                 -->
        
            </div>



        <div class="main-container"> 
            <div class="Left_container">

                <div class="container" id="container">

                            <div class="state-info">
                                <img id="locationIcon" src="images/location.png" class="">
                                <span id="stateName"> <?php  echo $fullLocation;  ?> </span>
                            </div>

                            <div class="greeting" id="greeting"></div>

                            <div id="timeContainer">

                                <div id="timeDiv"></div>

                                <div class="info-container">
                                    <div id="dayOfWeekDiv"> </div>
                                    <div id="dateDiv"></div>
                                </div>
                            </div>





                            <!-- <div class="state-info">
                                <img id="locationIcon" src="images/location.png" class="">
                                <span id="stateName">Uyo, Akwa ibom </span>
                            </div> -->

                            <!-- <img id="locationIcon" src="images/location.svg" class="weather-icon">  -->

                    <div class="weather">
                                <p class="weather_forecast">Weather Forecast</p>

                                <!-- <p class="weather-situation"></p> -->
                                <!-- Weather icon representing the current condition -->
                                <!-- <img src="images/rain.png" class="weather-icon"> -->

                                <!-- Displaying the current temperature -->
                                <!-- <h1 class="temp">22°C</h1> -->

                                <!-- Displaying the city name -->
                                <h2 class="city">New York</h2>

                        <!-- Detailed weather information, including humidity and wind speed -->
                        <div class="details">

                            <p class="weather-situation"></p>
                                <div class="humidity_div">
                                    <div>
                                        <p class="humidity">50%</p>
                                        <!-- <p>Humidity</p> -->
                                    </div>
                                    <img src="images/humidity.png">
                                </div>
                                <div class="wind_speed">
                                    <div>
                                        <p class="wind">15km/h</p>
                                        <!-- <p>Wind Speed</p> -->
                                    </div>
                                    <img src="images/wind.png">
                                </div>
                                <h1 class="temp">22°C</h1>
                                <img src="images/rain.png" class="weather-icon">
                            </div>

                        </div>



                </div>  



                        <div class="container2">

                            <div class="security-Update">
                                <div class="report">Security Report</div>
                                <div class="update">Security Update:  <span id="stateName2"> <?php echo $fullLocation;   ?> </span></div>
                                <div id="dateDiv2"></div>
                                <div id="timeDiv2"></div>
                                <div id="securityUpdate-"> 

                                    <?php include 'includes/updateDisplay.php';  ?>

                                </div>
                            </div>
                        </div>      

            </div>




              <div  class="Right_container" id="overlay-container">



                <div class="coverage_areas">Coverage Area</div>

                    <div class="city-links">

                        <!-- <div class="uyo-state"   onclick="fetchWeather('Uyo')">  

                           <div class="uyo_state_img">
                                 <img src="images/uyo.png" alt=""> 
                            </div>

                           <div class="link"> 
                                <a href="#">Uyo, Akwa ibom
                                <div class="uyo-address"> Plot 549 Nwaniba Road (Opposite Atlantic FM) Nsukara.</div>
                                </a>
                            </div>

                        </div> -->

                        <div class="uyoButtonClick">
                            <div class="leftContainer">
                                <img src="images/uyo.png" alt=""> 
                            </div>
                            <div class="rightContainer">
                                <form action="" method = "Post">
                                <input type="submit" name="Uyo" onclick="fetchWeather('Uyo')" value="Akwa ibom"> <br>
                                </form>
                                 <div class="address"> Plot 549 Nwaniba Road (Opposite Atlantic FM) Nsukara. </div>
                            </div>
                            
                        </div>
                        



                        <!-- <div class="ekiti-state"   onclick="fetchWeather('Ado-Ekiti')">  

                            <div class="ekiti_state_img">
                                  <img src="images/ado-ekiti.png" alt=""> 
                             </div>

                            <div class="link"> 
                                 <a href="#">Ado-Ekiti,Ekiti
                                 <div class="uyo-address">Plot 225, Ikeja Avenue, Adere Falegan, Ado-Ekiti.</div>
                                 </a>
                             </div>

                        </div> -->


                        
                        <div class="adoEkitiButtonClick">
                            <div class="leftContainer">
                                <img src="images/ado-ekiti.png" alt=""> 
                            </div>
                            <div class="rightContainer">
                            <form action="" method = "Post">
                                <input type="submit" name="Ado-Ekiti" onclick="fetchWeather('Ado-Ekiti')" value="Ekiti"> <br>
                            </from>
                                <div class="address"> Plot 225, Ikeja Avenue, Adere Falegan, Ado-Ekiti. </div>
                            </div>
                            
                        </div>



                        <!-- <div class="calabar-state"   onclick="fetchWeather('Calabar')">  

                            <div class="calabar_state_img">
                                  <img src="images/calabar.png" alt=""> 
                             </div>

                            <div class="link"> 
                                 <a href="#">Calabar,Cross River
                                 <div class="calabar-address">No. 4 Clement Ebri drive, State Housing Estate.</div>
                                 </a>
                             </div>

                        </div> -->



                        <div class="calabarButtonClick">
                            <div class="leftContainer">
                                <img src="images/calabar.png" alt=""> 
                            </div>
                            <div class="rightContainer">
                            <form action="" method = "Post">
                                <input type="submit" name="Calabar" onclick="fetchWeather('Calabar')" value="Cross River"> <br>
                            </from>
                                 <div class="address"> No. 4 Clement Ebri drive, State Housing Estate. </div>
                            </div>
                           
                        </div>




                        <!-- <div class="delta-state"   onclick="fetchWeather('Delta')">  

                            <div class="calabar_state_img">
                                  <img src="images/delta.png" alt=""> 
                             </div>

                            <div class="link"> 
                                 <a href="#">Asaba, Delta
                                 <div class="delta-address">#4 Engr. Edwin Agha Street, off Ralph Uwachie Road.</div>
                                 </a>
                             </div>

                        </div> -->


                        <div class="asabaButtonClick">
                            <div class="leftContainer">
                                <img src="images/delta.png" alt=""> 
                            </div>
                            <div class="rightContainer">
                                <form action="" method = "Post">
                                    <input type="submit" name="Delta" onclick="fetchWeather('Delta')" value="Delta"> <br>
                                </from>
                                 <div class="address">#4 Engr. Edwin Agha Street, off Ralph Uwachie Road. </div>
                            </div>
                            
                        </div>



                        <!-- <div class="abuja-state"   onclick="fetchWeather('Abuja')">  

                            <div class="abuja_state_img">
                                  <img src="images/abuja.png" alt=""> 
                             </div>

                            <div class="link"> 
                                 <a href="#">FCT, Abuja
                                 <div class="abuja-address">Plot 14 off Oladipo Diya Way, Sector Center D. Gudu, Abuja.</div>
                                 </a>
                             </div>

                        </div> -->


                        <div class="abujaButtonClick">
                            <div class="leftContainer">
                                <img src="images/delta.png" alt=""> 
                            </div>
                            <div class="rightContainer">
                                <form action="" method = "Post">
                                    <input type="submit" name="Abuja" onclick="fetchWeather('Abuja')" value="Abuja"> <br>
                                </from>
                                 <div class="address">Plot 14 off Oladipo Diya Way, Sector Center D. Gudu, Abuja.</div>
                            </div>
                            
                        </div>




                        <!-- <div class="osun-state"   onclick="fetchWeather('Osun')">  

                            <div class="osun_state_img">
                                  <img src="images/osun.png" alt=""> 
                             </div>

                            <div class="link"> 
                                 <a href="#">Osogbo, Osun
                                 <div class="osun-address">No. 5 Romeke Edu Street (After ICPC office), Off Olu Aina...</div>
                                 </a>
                             </div>

                        </div> -->


                        <div class="osunButtonClick">
                            <div class="leftContainer">
                                <img src="images/osun.png" alt=""> 
                            </div>
                            <div class="rightContainer">
                                <form action="" method = "Post">
                                    <input type="submit" name="Osun" onclick="fetchWeather('Osun')" value="Osun"> <br>
                                </from>
                                 <div class="address">No. 5 Romeke Edu Street (After ICPC office), Off Olu Aina...</div>
                            </div>
                            
                        </div>




                        <!-- <div class="ebonyi-state"   onclick="fetchWeather('Abakaliki')">  

                            <div class="ebonyi_state_img">
                                  <img src="images/abakaliki.png" alt=""> 
                             </div>

                            <div class="link"> 
                                 <a href="#">Abakaliki, Ebonyi
                                 <div class="ebonyi-address">Plot 5 Obinna Ogadima Onwe8 Road, GRA-Abakaliki.</div>
                                 </a>
                             </div>

                        </div> -->


                        <div class="ebonyiButtonClick">
                            <div class="leftContainer">
                                <img src="images/osun.png" alt=""> 
                            </div>
                            <div class="rightContainer">
                                <form action="" method = "Post">
                                    <input type="submit" name="Abakaliki" onclick="fetchWeather('Abakaliki')" value="Ebonyi"> <br>
                                </from>
                                 <div class="address">Plot 5 Obinna Ogadima Onwe8 Road, GRA-Abakaliki.</div>
                            </div>
                            
                        </div>


                        <!-- <div class="ekitia-state"> <img src="images/ado-ekiti.png" alt=""> 
                             <a class="ekiti" href="#" onclick="fetchWeather('Ado-Ekiti')">Ado-Ekiti, Ekiti
                            <p> Plot 225, Ikeja Avenue, Adere Falegan, Ado-Ekiti.</p>
                             </a>

                        </div>

                     -->
                        <!-- <a href="#" onclick="fetchWeather('Calabar')">Calabar,Cross River</a> -->

                    </div>




                    <div class="important_contacts">


                        <div class="important_contact_heading">Important Contacts</div> 

                        <!-- 
                        <div class="security_manager">

                              <div class="vector_img">
                                     <img src="images/Vector.svg" alt=""> 
                              </div>


                              <div class="name_contact">
                                    <div class="name"> ECEWS Security Manager </div>
                                    <div class="contact"> +234 809 604 303</div>
                              </div>

                        </div> -->

                        <div class="securityComponent">

                            <div class="securityComponentRapperLeft">
                                <img src="images/Vector.svg" alt=""> 
                            </div>
                            <div class="securityComponentRapperRight">
                                <div class="securitySubject">
                                    ECEWS Security Manager
                                </div>
                                <div class="phone"> +234 809 604 303 </div>
                            </div>
                        </div>





                        <!-- <div class="security_associate">

                            <div class="vector_img">
                                   <img src="images/Vector.svg" alt=""> 
                            </div>


                            <div class="name_contact">
                                  <div class="name"> ECEWS Security Associate </div>
                                  <div class="contact"> +234 602 529 6303</div>
                            </div>

                      </div> -->

                         <div class="securityComponent">

                            <div class="securityComponentRapperLeft">
                                <img src="images/Vector.svg" alt=""> 
                            </div>
                            <div class="securityComponentRapperRight">
                                <div class="securitySubject">
                                    ECEWS Security Associate
                                </div>
                                <div class="phone"> +234 602 529 6303</div>
                            </div>
                        </div>





                        <!-- <div class="emergency_service">

                                <div class="vector_img">
                                    <img src="images/Vector.svg" alt=""> 
                                </div>


                                <div class="name_contact">
                                    <div class="name"> Emergency Service </div>
                                    <div class="contact"> 112</div>
                                </div>

                        </div> -->


                         <div class="securityComponent">

                            <div class="securityComponentRapperLeft">
                                <img src="images/Vector.svg" alt=""> 
                            </div>
                            <div class="securityComponentRapperRight">
                                <div class="securitySubject">
                                    Emergency Service
                                </div>
                                <div class="phone"> 112 </div>
                            </div>
                        </div>




<!-- 
                        <div class="emergency_response">

                                <div class="vector_img">
                                    <img src="images/Vector.svg" alt=""> 
                                </div>


                                <div class="name_contact">
                                    <div class="name"> NPF Contact </div>
                                    <div class="contact"> +234 809 604 303</div>
                                </div>

                        </div> -->


                         <div class="securityComponent">

                            <div class="securityComponentRapperLeft">
                                <img src="images/Vector.svg" alt=""> 
                            </div>
                            <div class="securityComponentRapperRight">
                                <div class="securitySubject">
                                    NPF Contact
                                </div>
                                <div class="phone"> +234 809 604 303 </div>
                            </div>
                        </div>





                    </div>





                </div>

            </div>


            <!-- <form method="post"> 
                <input type="submit" name="Uyo" Value="Uyo" style="margin-left: 10vw; margin-top: 10vw;">
            </form>
 -->





    <script src="js/weather.js"></script>
    

</body>
</html>
