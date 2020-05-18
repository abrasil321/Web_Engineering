function calc() {
    let apr = (document.getElementById("apr").value) / 1200;
    let term = (document.getElementById("term").value)* 12;
    let amount = document.getElementById("amount").value;
    if(!amount) {
        document.getElementById("payment").value = "Invalid Input";
    }
    else if(!term) {
        document.getElementById("payment").value = "Invalid Input";
    }
    else if(!apr) {
        document.getElementById("payment").value = "Invalid Input";
    }
    else {
    let calcc = amount*(apr * Math.pow((1 + apr), term))/(Math.pow((1 + apr), term) - 1);
    document.getElementById("payment").value = calcc.toFixed(2);
    }
}