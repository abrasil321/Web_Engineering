function doSearch(){
    var sCity = encodeURI(document.getElementById("sCity").value);
    var sState = encodeURI(document.getElementById("sState").value);
    var dCity = encodeURI(document.getElementById("dCity").value);
    var dState = encodeURI(document.getElementById("dState").value);
    var url = "/cgi-bin/cs213/mileageAjaxJSON?" +
            "action=query&" +
            "list=search&" +
            "srsearch=?startCity" + sCity + "&startState" + sState + "&endCity" + dCity + "&endState" + dState +
            "format=json&" +
            "origin=*";
    var method = "GET";

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            // var response = JSON.parse(this.responseText);
            // var myArray = response.query.search;

            // var h = "";
            // myArray.forEach(function(item) {
            //     var pURL = "https://en.wikipedia.org/wiki/" + item.title;
            //    h += `<div>
            //         <h2><a href="${pURL}">${item.title}</h2>
            //         <p>${item.snippet}</p>
            //         </div>`;


               
                // h += "<h2>" + item.title + "</h2>";
                // h += "<p>" + item.snippet + "</p>";
            // };
            // document.getElementById("display").innerHTML = h;


            // document.getElementById("content").innerHTML += "<h2>" + response.query.search[0].title + "</h2>";
            // document.getElementById("content").innerHTML += "<p>" + response.query.search[0].snippet + "</p>";
        }
    };

    xhr.open(method, url);
    xhr.send();
}

// "encodeURI" = replace spaces for url code -->
// http://cgi-bin/cs213/mileageAjaxJSON?action=query&list=search&srsearch=hats&format=json 

