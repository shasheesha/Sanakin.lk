
function checkPasswordMatch() {
    var password = document.getElementById("txtNewPassword").value;
    var confirmPassword = document.getElementById("txtConfirmPassword").value;
    if (password != confirmPassword) {
      document.getElementById("divCheckPasswordMatch").innerHTML = "Passwords do not match!";
      document.getElementById("submit").disabled = true;
    } else {
      document.getElementById("divCheckPasswordMatch").innerHTML = "Passwords match.";
      document.getElementById("submit").disabled = false;
    }
  }