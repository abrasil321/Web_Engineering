function getFocus() {
    document.getElementById("inputFirst").focus();
}

function totall() {
   var x1 = document.getElementById("inputFirst").value;
   var x2 = document.getElementById("inputLast").value;
   var x3 = document.getElementById("inputAddress").value;
   var x41 = document.getElementById("exp1").value;
   var x42 = document.getElementById("exp2").value;
   var x51 = document.getElementById("cred1").value;
   var x52 = document.getElementById("cred2").value;
   var x53 = document.getElementById("cred3").value;
   var x54 = document.getElementById("cred4").value;
   var x6 = document.getElementById("car").value;
    if (x1 == "") {
        return false;
    }
    else if (x2 == "") {
        return false;
    } 
    else if(x3 == "") {
        return false
    }
    else if ((x41 == "") || (x42 == "")) {
        return false
    } 
    else if ((x51 == "") || (x52 == "") || (x53 == "") || (x54 == "")) {
        return false;
    }
    else if (x6 == false) {
        return false;
    }
    else{
        return true;
    }
}
