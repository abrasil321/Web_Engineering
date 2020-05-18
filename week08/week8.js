/***************************** Calculation ******************************/

/*       Whey    */
function whey1(){
    var amount = 0;
    var check11 = document.getElementById("item_11").checked;
    var quantity11 = document.getElementById("quantity11").value;

    if(check11 == true){
        amount = quantity11 * 32.99;
    }
   return amount;
}


function whey2(){
    var amount = 0;
    var check12 = document.getElementById("item_12").checked;
    var quantity12 = document.getElementById("quantity12").value;

    if(check12 == true){
        amount = quantity12 * 29.45;
    }
   return amount;
}

function whey3(){
    var amount = 0;
    var check13 = document.getElementById("item_13").checked;
    var quantity13 = document.getElementById("quantity13").value;;

    if(check13 == true){
        amount = quantity13 * 30.92;
    }
   return amount;
}


function whey4(){
    var amount = 0;
    var check14 = document.getElementById("item_14").checked;
    var quantity14 = document.getElementById("quantity14").value;;

    if(check14 == true){
        amount = quantity14 * 29.55;
    }
   return amount;
}

function whey(){
    var amount1 = whey1();
    var amount2 = whey2();
    var amount3 = whey3();
    var amount4 = whey4();

    var totalAmount = amount1 + amount2 + amount3 + amount4;

    return totalAmount;    
}

/*     Isolate     */

function isolate1(){
    var amount = 0;
    var check21 = document.getElementById("item_21").checked;
    var quantity21 = document.getElementById("quantity21").value;;

    if(check21 == true){
        amount = quantity21 * 33.49;
    }
   return amount;
}

function isolate2(){
    var amount = 0;
    var check22 = document.getElementById("item_22").checked;
    var quantity22 = document.getElementById("quantity22").value;;

    if(check22 == true){
        amount = quantity22 * 31.15;
    }
   return amount;
}

function isolate3(){
    var amount = 0;
    var check23 = document.getElementById("item_23").checked;
    var quantity23 = document.getElementById("quantity23").value;;

    if(check23 == true){
        amount = quantity23 * 35.12;
    }
   return amount;
}


function isolate4(){
    var amount = 0;
    var check24 = document.getElementById("item_24").checked;
    var quantity24 = document.getElementById("quantity24").value;;

    if(check24 == true){
        amount = quantity24 * 32.85;
    }
   return amount;
}

function isolate(){
    var amount1 = isolate1();
    var amount2 = isolate2();
    var amount3 = isolate3();
    var amount4 = isolate4();

    var totalAmount = amount1 + amount2 + amount3 + amount4;

    return totalAmount;    
}

/*     Hydrolyzed      */

function hydro1(){
    var amount = 0;
    var check31 = document.getElementById("item_31").checked;
    var quantity31 = document.getElementById("quantity31").value;;

    if(check31 == true){
        amount = quantity31 * 38;
    }
   return amount;
}

function hydro2(){
    var amount = 0;
    var check32 = document.getElementById("item_32").checked;
    var quantity32 = document.getElementById("quantity32").value;;

    if(check32 == true){
        amount = quantity32 * 39.35;
    }
   return amount;
}

function hydro3(){
    var amount = 0;
    var check33 = document.getElementById("item_33").checked;
    var quantity33 = document.getElementById("quantity33").value;;

    if(check33 == true){
        amount = quantity33 * 25.90;
    }
   return amount;
}

function hydro4(){
    var amount = 0;
    var check34 = document.getElementById("item_34").checked;
    var quantity34 = document.getElementById("quantity34").value;

    if(check34 == true){
        amount = quantity34 * 38.90;
    }
   return amount;
}

function hydro(){
    var amount1 = hydro1();
    var amount2 = hydro2();
    var amount3 = hydro3();
    var amount4 = hydro4();

    var totalAmount = amount1 + amount2 + amount3 + amount4;

    return totalAmount;    
}

/*    Total Amount     */

function theTotal(){
    var total1 = whey();
    var total2 = isolate();
    var total3 = hydro();
    var total = total1 + total2 + total3;

    document.getElementById("total").value = total.toFixed(2);
}

/***************************** End Calculation *********************************/


function getFocus() {
    document.getElementById("inputFirst").focus();
}

function empty() {
    var x;
    x1 = document.getElementById("inputFirst").value;
    x2 = document.getElementById("inputLast").value;
    x3 = document.getElementById("inputAddress").value;
    x41 = document.getElementById("exp1").checked;
    x42 = document.getElementById("exp2").checked;
    x51 = document.getElementById("cred1").value;
    x52 = document.getElementById("cred2").value;
    x53 = document.getElementById("cred3").value;
    x54 = document.getElementById("cred4").value;
    x6 = document.getElementById("car").value;
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
