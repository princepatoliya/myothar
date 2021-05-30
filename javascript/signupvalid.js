function valid() {
  var uname = document.getElementById("username");
  var pass = document.getElementById("password");
  var cpass = document.getElementById("conpassword");
  var email = document.getElementById("emailid");
  var hosname = document.getElementById("hospitalname");

  var temp = 1;

  if (uname.value.trim() == "" || uname.value.trim() == null){
    uname.style.border = "solid 1px darkred";
    document.getElementById("labuser").style.visibility = "visible";
    temp = 1;
  }
  else{
    uname.style.border = "1px solid #ccc";
    document.getElementById("labuser").style.visibility = "hidden";
    temp = 0;
  }

  if (pass.value.trim() == "" || pass.value.trim() == null){
    pass.style.border = "solid 1px darkred";
    document.getElementById("labpass").style.visibility = "visible";
    temp = 1;
  }
  else{
    pass.style.border = "1px solid #ccc";
    document.getElementById("labpass").style.visibility = "hidden";
    temp = 0;
  }

  if (cpass.value.trim() == "" || cpass.value.trim() == null){
    cpass.style.border = "solid 1px darkred";
    document.getElementById("labcpass").style.visibility = "visible";
    temp = 1;
  }
  else{
    cpass.style.border = "1px solid #ccc";
    document.getElementById("labcpass").style.visibility = "hidden";
    temp = 0;
  }
  if (email.value.trim() == "" || email.value.trim() == null){
    email.style.border = "solid 1px darkred";
    document.getElementById("labemail").style.visibility = "visible";
    temp = 1;
  }
  else{
    email.style.border = "1px solid #ccc";
    document.getElementById("labemail").style.visibility = "hidden";
    temp = 0;
  }

  if (hosname.value.trim() == "" || hosname.value.trim() == null){
    hosname.style.border = "solid 1px darkred";
    document.getElementById("hosname").style.visibility = "visible";
    temp = 1;
  }
  else{
    hosname.style.border = "1px solid #ccc";
    document.getElementById("hosname").style.visibility = "hidden";
    temp = 0;
  }

  if(temp==1){
    return false;
  }
  else {
    if(pass.value.trim() == cpass.value.trim() && cpass.value.trim() != "" && cpass.value.trim() != null && pass.value.trim() != "" && pass.value.trim() != null){
      return true;
    }
    else{
      cpass.style.border = "solid 1px darkred";
      document.getElementById("labcpass").innerHTML = " Password does not match";
      document.getElementById("labcpass").style.fontWeight = "600";
      document.getElementById("labcpass").style.visibility = "visible";
      return false;
    }
  }
}
