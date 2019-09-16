function ConfirmPW() {
    let pw = document.getElementById("pass").value;
    let pw2 = document.getElementById("pass2").value;
    if (pw !== pw2) {
        document.getElementById("errPass").style.display = "block";
    }
    else {
        document.getElementById("errPass").style.display = "none";
    }
}
function checkupdate() {
    return confirm("Do you want update this profile?");
}
function checkdelete() {
    return confirm("Do you want delete this account?");
}