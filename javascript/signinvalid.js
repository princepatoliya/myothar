function valid() {
  var email = document.getElementById("username");
  var pass = document.getElementById("password");

  var temp = 0;
  if (email.value.trim() == "") {
    email.style.border = "solid 1px darkred";
    document.getElementById("labuser").style.visibility = "visible";
    temp = 1;
  } else {
    email.style.border = "1px solid #ccc";
    document.getElementById("labuser").style.visibility = "hidden";
    temp = 0;
  }

  if (pass.value.trim() == "") {
    pass.style.border = "solid 1px darkred";
    document.getElementById("labpass").style.visibility = "visible";
    temp = 1;
  } else {
    pass.style.value = "1px solid #ccc";
    document.getElementById("labpass").style.visibility = "hidden";
    temp = 0;
  }

  if (temp == 1) {
    return false;
  } else {
    return true;
  }
}
