

// function fetchWeather(city) {
//     const apiUrl = `https://api.openweathermap.org/data/2.5/weather?units=metric&q=${city}&appid=9b40b48969f85beeb0469831492b38b3`;

    

// }

// Utility function to get the correct image path based on the weather condition
function getImagePath(condition) {
    switch (condition) {
        case "Clouds":
            return "images/clouds.png";
        case "Clear":
            return "images/clear.png";
        case "Thunderstorm":
            return "images/thunderstorm.png";
        case "Haze":
            return "images/haze.png";    
        case "Rain":
            return "images/rain.png";
        case "Drizzle":
            return "images/drizzle.png";
        case "Mist":
            return "images/mist.png";
        case "Snow":
            return "images/snow.png";
        default:
            return "images/default.png"; // Default icon
    }
}

// Store references to frequently accessed elements
const cityElement = document.querySelector(".city");
const tempElement = document.querySelector(".temp");
const humidityElement = document.querySelector(".humidity");
const windElement = document.querySelector(".wind");
const weatherIconElement = document.querySelector(".weather-icon");
const securityUpdateElement = document.getElementById("securityUpdate");
const locationIconElement = document.getElementById("locationIcon");



window.onload = function() {
    fetchWeather("Uyo");
    citySecurityUpdate("Uyo");
    updateStateName("Uyo");
    updateTimeBasedBackground();
};



function fetchWeather(city) {
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?units=metric&q=${city}&appid=9b40b48969f85beeb0469831492b38b3`;
    const securityUpdateText = citySecurityUpdate[city] || "No specific security tips available for this city.";

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
        })
        .then(data => {
            // Update the DOM with the fetched weather data
            cityElement.innerHTML = data.name;
            tempElement.innerHTML = Math.round(data.main.temp) + "°C";
            humidityElement.innerHTML = data.main.humidity + "%";
            windElement.innerHTML = data.wind.speed + " km/h";

            // Determine the current weather condition and update the weather icon accordingly
            const weatherCondition = data.weather[0].main;
            weatherIconElement.src = getImagePath(weatherCondition);
            


         

            
            // Set the location icon based on the city
            locationIconElement.src = "images/location.svg"; // Assuming all cities use the same icon for simplicity

            // Extract and display the weather situation
            const weatherSituation = data.weather[0].main;
            document.querySelector(".weather-situation").innerText = weatherSituation.toUpperCase(); // Convert to uppercase for consistency

            // Show the weather details
            document.querySelector(".weather").style.display = "block";



            // Display the security tip for the selected city
            if (securityUpdateText) {
                if (securityUpdateElement.scrollHeight > securityUpdateElement.clientHeight) {
                    // Text is too long, truncate or handle as needed
                    securityUpdateElement.innerText = securityUpdateText.substring(0, 150) + "..."; // Truncate with ellipsis
                } else {
                    // Text fits, set it normally
                    securityUpdateElement.innerText = securityUpdateText;
                }
            } else {
                console.log(`No security Update available for ${city}`);
            }
        })
        .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
            document.querySelector(".error").style.display = "block";
        });
}







document.addEventListener('DOMContentLoaded', function() {
    const cityLinks = document.querySelectorAll('.city-links a');

    cityLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action (navigation)

            // Extract the city name from the link's innerText or href attribute
            const cityName = this.textContent.trim().split(',')[0]; // Assuming the city name is the first word in the link text

            // Now, pass the cityName to a function that will update the state name
            updateStateName(cityName);
            updateStateName2(cityName);
            
        });
    });
});

// Example mapping of city names to state abbreviations
const cityToState = {
    "Ado-Ekiti": "Ekiti",
    "Uyo": "Akwa ibom",
    "Calabar": "CrossRiver",
    "Asaba": "Delta",
    "FCT": "Abuja",
    "Osogbo": "Osun",
    "Abakaliki": "Ebonyi"
    // Add other cities and their states here
};

function updateStateName(cityName) {
    const newStateAbbreviation = cityToState[cityName];
    if (newStateAbbreviation) {
        document.getElementById('stateName').textContent = `${newStateAbbreviation}`;
    } else {
        console.log(`State abbreviation not found for ${cityName}`);
    }
}


function updateStateName2(cityName) {
    const newStateAbbreviation = cityToState[cityName];
    if (newStateAbbreviation) {
        document.getElementById('stateName2').textContent = ` ${newStateAbbreviation}`;
    } else {
        console.log(`State abbreviation not found for ${cityName}`);
    }
}
















const citySecurityUpdate = {
    "Ado-Ekiti": `
    Incident Type: Security Updates.

    Information:
    The general area security level classification of Ekiti State is MEDIUM

    Notes:
    - Security situation in Ekiti State is unpredictable but containable.
    - There is an uptick in criminality in Ado-Ekiti metropolis.

    Advisory:
    1. Staff should maintain situational awareness always and contact their Supervisors in case of emergency.
    2. Staff are advised to maintain low profiles.
    3. Staff should adhere to ECEWS Security SOPs including those for trips and travels.
    4. Teams/staff are advised to always carry means of identification.
`,


    "Uyo": `
    Incident Type: Security Updates.
    
    Information:
    The general area security level classification of the FCT and Akwa Ibom State is MEDIUM.
    
    Notes:
    a. Security situations in the FCT and Akwa Ibom State are unpredictable but containable.
    b. There is an uptick in criminality in the FCT.
    c. There is a heightened criminality and cult activities in Uyo metropolis.
    
    Advisory:
    1. Staff should maintain situational awareness always and contact their Supervisors in case of emergency.
    2. Staff should avoid large gatherings/take alternative routes if roadblocks by protesters are encountered.
    3. Staff are advised to maintain a low profile.
    4. Staff should adhere to ECEWS Security SOPs including those for trips and travels.
    5. Teams are to be alert, carry means of identification, and reduce non-essential trips/movements.
    6. Staff are strongly advised to increase their alertness and adhere to security advisories and SOP due to uptick in criminality.`,
       

    "Calabar" :"Incident Type: Security Updates.\n\nInformation:\nThe general area security level classification of Calabar State is HIGH\n\nNotes:\na. The security situation in Delta State is unpredictable, but containable.\nb. There is an uptick in criminality.\nc. There is tension IVO Okpai community in Kwale following protest which turned violent. GSF have been deployed.\n\nAdvisory:\n1. Staff should maintain situational awareness always and contact their Supervisors in case of emergency.\n2. Staff should avoid large gatherings/take alternative routes if roadblocks by protesters are encountered.\n3. Staff are advised to maintain low profiles.\n4. Staff should adhere to ECEWS Security SOPs including those for trips and travels.\n5. Staff/teams are advised to adhere to Project leadership guidance on Okuama community and riverine trips.\n6. Staff are advised to avoid non-essential, night trips and always be alert.\n7. Teams/staff in Agbor and Kwale should be on alert.",

    "Delta" : "Incident Type: Security Updates.\n\nInformation:\nThe general area security level classification of Delta State is HIGH\n\nNotes:\na. The security situation in Delta State is unpredictable, but containable.\nb. There is an uptick in criminality in Ughelli.\nc. There is tension IVO Okpai community in Kwale following protest which turned violent. GSF have been deployed.\n\nAdvisory:\n1. Staff should maintain situational awareness always and contact their Supervisors in case of emergency.\n2. Staff should avoid large gatherings/take alternative routes if roadblocks by protesters are encountered.\n3. Staff are advised to maintain low profiles.\n4. Staff should adhere to ECEWS Security SOPs including those for trips and travels.\n5. Staff/teams are advised to adhere to Project leadership guidance on Okuama community and riverine trips.\n6. Staff are advised to avoid non-essential, night trips and always be alert.\n7. Teams/staff in Agbor and Kwale should be on alert.",
  
    "Abuja": `
Incident Type: Security Updates.

Information:
The general area security level classification of the FCT and Akwa Ibom State is MEDIUM.

Notes:
a. Security situations in the FCT and Akwa Ibom State are unpredictable but containable.
b. There is an uptick in criminality in the FCT.
c. There is a heightened criminality and cult activities in Uyo metropolis.

Advisory:
1. Staff should maintain situational awareness always and contact their Supervisors in case of emergency.
2. Staff should avoid large gatherings/take alternative routes if roadblocks by protesters are encountered.
3. Staff are advised to maintain low profile.
4. Staff should adhere to ECEWS Security SOPs including those for trips and travels.
5. Teams are to be alert, carry means of identification and reduce non-essential trips/movements.
6. Staff are strongly advised to increase their alertness and adhere to security advisories and SOP due to uptick in criminality.`,


"Osun": "Incident Type : Security Updates.\nInformation :\nThe general area security level classification of Osun State is MEDIUM \n\nNotes \na. Security situation in Osun State is unpredictable but containable.\nAdvisory :\n1. Staff should maintain situational awareness always and contact their Supervisors  in case of emergency. \n2.  Staff are advised to maintain low profiles.\n3. Staff should adhere to ECEWS Security SOPs including those for trips and travels.\n4. Teams/staff are advised to always carry means of identification.",



"Abakaliki" : "Incident Type: Security Updates.\n\nInformation:\nThe general area security level classification of Ebonyi State is HIGH\n\nNotes:\na. The security situation in Ebonyi State is unpredictable, but containable.\nb. There is an uptick in criminality in .\nc. There is tension IVO Okpai community in Kwale following protest which turned violent. GSF have been deployed.\n\nAdvisory:\n1. Staff should maintain situational awareness always and contact their Supervisors in case of emergency.\n2. Staff should avoid large gatherings/take alternative routes if roadblocks by protesters are encountered.\n3. Staff are advised to maintain low profiles.\n4. Staff should adhere to ECEWS Security SOPs including those for trips and travels.\n5. Staff/teams are advised to adhere to Project leadership guidance on Okuama community and riverine trips.\n6. Staff are advised to avoid non-essential, night trips and always be alert.\n7. Teams/staff in Agbor and Kwale should be on alert.",
};












// background change code
function updateTimeBasedBackground() {
    const currentTime = new Date();
    let backgroundImage = '';
    let greetingText = '';
    let timeString = '';
    let dateString = '';
    let dayOfWeek = '';

    if (currentTime.getHours() >= 6 && currentTime.getHours() <= 11) {
        backgroundImage = 'url(images/morning.png)';
        greetingText = 'Good Morning';
    } else if (currentTime.getHours() >= 12 && currentTime.getHours() <= 17) {
        backgroundImage = 'url(images/afternoon.png)';
        greetingText = 'Good Afternoon';
    } else {
        backgroundImage = 'url(images/evening.png)';
        greetingText = 'Good Evening';
    }

        // Apply the background image to the container
    document.getElementById("container").style.backgroundImage = backgroundImage;
    document.getElementById("container").style.backgroundPosition = '80px'; // Adjusted for better positioning

     // Add the overlay
    

    // Update the greeting
    document.getElementById("greeting").textContent = greetingText;

    // Format the current time
    timeString = `${currentTime.toLocaleTimeString([], { hour: 'numeric', minute: 'numeric' })}`;

    // Format the current date
    dateString = `${currentTime.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' })}`;

    // Get the current day of the week
    dayOfWeek = currentTime.toLocaleString('en-US', { weekday: 'long' });

    // Update the time, date, and day of the week in the UI
    document.getElementById("timeDiv").textContent = timeString;
    document.getElementById("dateDiv").textContent = dateString;
    document.getElementById("dateDiv2").innerHTML = `<strong>Date:</strong> ${dateString}`; // Updated line
    document.getElementById("timeDiv2").innerHTML = `<strong>Time:</strong> ${timeString}`; // Updated line
   
    document.getElementById("dayOfWeekDiv").textContent = dayOfWeek;
}

// Call the function initially to set the correct background image, greeting, and time/date for the current moment
updateTimeBasedBackground();

// Update the background image, greeting, and time/date every minute
setInterval(updateTimeBasedBackground, 60 * 1000);



function try1(){
    alert("GReat!");
}











