function CheckUsername(){
    var Username = document.getElementById("username").value;
var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("errorusername").innerHTML =this.responseText;
               }
               else
               {
                   document.getElementById("errorusername").innerHTML = this.status;
               }
              
             
             };
             xhttp.open("POST", "../Controller/GetUsername.php", true);
             xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
             xhttp.send("Username="+Username);
            }