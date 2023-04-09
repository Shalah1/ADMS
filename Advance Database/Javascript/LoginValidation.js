function Validation() {
    var password = document.getElementById("password").value;
    var user = document.getElementById("username").value;
    if(user=="")
    {
      document.getElementById("errorUser").innerHTML="Username  Required !!";
    }
    else
    {
      document.getElementById("errorUser").innerHTML="";
     
    }
  
   if (password.length<4 ) 
   {
     document.getElementById("errorpass").innerHTML="Password contains 5 char";
      return false;
    }
    else 
    {
      document.getElementById("errorpass").innerHTML="";
    }
  
  
  }
  