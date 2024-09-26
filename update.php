
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admin Pannel</title>
    <link rel="stylesheet" href="style/updateStyle.css">


<?php 
    // include './includes/dbUpdate.php';

    echo "<script> 

    let dateObj = new Date();
    let newMonth = '';

    let month = String(dateObj.getMonth() + 1).padStart(2, '0');

    let day = String(dateObj.getDate()).padStart(2, '0');

    let year = dateObj.getFullYear();

    if ( month == 01 ){
        newMonth = 'January';
    }

    if ( month == 02 ){
        newMonth = 'February';
    }

    if ( month == 03 ){
        newMonth = 'March';
    }

    if ( month == 04 ){
        newMonth = 'April';
    }

    if ( month == 05 ){
        newMonth = 'May';
    }

    if ( month == 06 ){
        newMonth = 'June';
    }

    if ( month == 07 ){
        newMonth = 'July';
    }

    if ( month == 08 ){
        newMonth = 'August';
    }

    if ( month == 09 ){
        newMonth = 'September';
    }

    if ( month == 10 ){
        newMonth = 'October';
    }

    if ( month == 11 ){
        newMonth = 'November';
    }

    if ( month == 11 ){
        newMonth = 'December';
    }



     let curentDate = day + '-' + month + '-' + year;

    //let curentDate = newMonth + ' ' + day + ',' + ' ' + year;

    // alert (curentDate);
    //document.getElementById('currentDate').value = curentDate;

    //document.getElementById('newDate').innerText = “Hello World”;
   
    
</script> " ;


$currentDate = "<script>document.write(curentDate)</script>";




?> 



</head>
<body>
    
    <div class="updateNav">
        <img src="images/ECEWS Logo 1.jpg" alt="ECEWS logo" onclick="goToECEWS_Home();">
         <div class="homeButton"  onclick="goToHome();">Home</div>
    </div>

    
    <div class="securityUpdateTitle">
    
        <div class="securityUpdateForm">
            <form action="/includes/dbUpdate.php" method="post">
            <div class="formTittle"> 
                Security Report Update  
            </div>  
            <div class="currentDate">
               <div class="currentDateTitle" id="currentDate">Current Date: </div> 
                
                    <input type="text" class= "datteInput" name = "newDate" value="  " id="newDate">
                   <!-- <div class= "datteInput" name="datteInput">  </div> -->
              
            </div>

            <div class="label">Location</div>
            <div class="location">
                <select name="State" id="State">
                    <option value="Abuja">Abuja</option>
                    <option value="Calabar">Calabar</option>
                    <option value="Delta">Delta</option>
                    <option value="Ekiti">Ekiti</option>
                    <option value="Ebonyi">Ebonyi</option>
                    <option value="Oshun">Oshun</option>
                    <option value="Uyo">Uyo</option>
                </select>
            </div>

            <div class="label">Incident Type</div>
            <div class="incidentType">
                <textarea name="incidentType" id="incidentType" placeholder="Text  area" required></textarea>
            </div>

            <div class="label">Information</div>
            <div class="information">
                <textarea name="information" id="information" placeholder="Text  area" required></textarea>
            </div>
            <div class="label">Notes</div>
            <div class="note">
                <textarea name="note" id="note" placeholder="Text  area" required></textarea>
            </div>

            <div class="label">Advisory</div>
            <div class="Advisory">
                <textarea name="Advisory" id="Advisory" placeholder="Text  area" required></textarea>
            </div>

            <div class="submitButton" ;>
                <input type="submit" value="Submit" >
            </div>
            </form>
        </div>
    
    </div>


  
   



<script src="js/updateScript.js"></script>
</body>
</html>





