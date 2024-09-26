

document.getElementById("newDate").value = curentDate;




updateSuccessHide();



// ROUTES
// location.replace("...")

function goToHome(){
    window.location.href = "index.php";
}

function toHome(){
    window.location.href = "index.php";
}


function goToECEWS_Home(){
    window.location.href = "https://ecews.org/";
}





// function updateSuccess(){
//   document.getElementById("Dialoguebackground").style.display="block";
//   document.getElementById("updateSuccessDialogueRapper").style.display="block";
//   document.getElementById("modal-content").style.display="block";

// }

 function updateSuccessHide(){
document.getElementById("Dialoguebackground").style.visibility = "hidden";
document.getElementById("updateSuccessDialogueRapper").style.visibility = "hidden";

 }

 function updateSuccessShow(){
    document.getElementById("Dialoguebackground").style.visibility = "visible";
    document.getElementById("updateSuccessDialogueRapper").style.visibility = "visible";
    
     }
    
