// First Section
function loadCountry(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            document.getElementById("info").innerHTML = this.responseText;
        }
    };

    var country = document.getElementById("ctry").value;
    if(country == "Canada"){
        xhttp.open("GET", "canada.txt", true);   
    }
    else if (country == "Mexico") {
        xhttp.open("GET", "mexico.txt", true);
    } 
    else if (country == "Russia") {
        xhttp.open("GET", "russia.txt", true);
    } 
    else if (country == "USA") {
        xhttp.open("GET", "usa.txt", true);
    } 
    xhttp.send();
}


// Second Section
function loadStudent(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            var obj = JSON.parse(this.responseText);
            var i;
            var x= "";
            for(i = 0; i < obj.students.length; i++){
                x +="Name: " + obj.students[i].first + " " +
                    obj.students[i].last + "<br>" + "Address: " + obj.students[i].address.city + "-" + 
                    obj.students[i].address.state + ", " + obj.students[i].address.zip + "<br>" +
                    "Major: " + obj.students[i].major + "<br>GPA: " + obj.students[i].gpa + "<br> <br>";
                }
            document.getElementById("info2").innerHTML = x;
        }
    };

  var file = document.getElementById("file").value;
  if(file == "json"){
    xhttp.open("GET", "json.txt", true);
  }
  else if(file == "json1"){
    xhttp.open("GET", "json1.txt", true);
  }
  else{
      document.getElementById("info2").innerHTML = "File does not exist!";
  }
  xhttp.send();
}

