$(document).ready(function() {
    $("#color_mode").on("change", function () {
        colorModePreview(this);
    })
});

function colorModePreview(ele) {
    if ($(ele).prop("checked") == true) {
        $('body').addClass('dark-preview');
        $('body').removeClass('white-preview');
    }
    else if ($(ele).prop("checked") == false) {
        $('body').addClass('white-preview');
        $('body').removeClass('dark-preview');
    }
}

function checkPasswordMatch() {
    var password = document.getElementById("newPassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    if (password != confirmPassword) {
        document.getElementById("divCheckPasswordMatch").innerHTML = "Passwords do not match!";
        document.getElementById("submit").disabled = true;
    } else {
        document.getElementById("divCheckPasswordMatch").innerHTML = "Passwords match.";
        document.getElementById("submit").disabled = false;
    }
}


// function processFuncVerification(newEmail) {
//     var param1 = newEmail;
//
//     var xhr = new XMLHttpRequest();
//
//     xhr.open("POST", "./functions/email-functions.php", true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.onreadystatechange = function () {
//         if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
//             alert(this.responseText);
//         }
//     };
//     xhr.send("function=emailVerificationSend&newEmail=" + param1);
//
//     console.log('Record updated successfully aaa- ' + param1);
// }

function hide1() {

    var xhttp = new XMLHttpRequest();

    xhttp.open("POST", "js/data-crud.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === XMLHttpRequest.DONE && xhttp.status === 200) {
            if (xhttp.responseText) {
                var responseObj = JSON.parse(xhttp.responseText);
                if (responseObj) {
                    if(responseObj.status === "SUCCESS"){
                        document.getElementById('submitedEmail').innerHTML = email;
                        document.getElementById("signup-s1").style.display = "none";
                        document.getElementById("signup-s2").style.display = "flex";

                    }
                }
            }

        } else {
            console.log(xhttp.status);
            console.log(xhttp.responseText);
        }
    }

    var email = document.getElementById("newEmail").value;
    var password = document.getElementById("newPassword").value;
    var type = document.getElementById("newEmail").value;
    xhttp.send("newEmail=" + email + "&newPassword=" + password + "&newType=" + type);
}

function hide2() {
    document.getElementById("sec2").style.display = "none";
    document.getElementById("sec3").style.display = "block";
}


  