function validatePassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    if (password != confirmPassword) {
    alert("كلمة السر غير متطابقة");
    return false;
    }
    return true;
}
