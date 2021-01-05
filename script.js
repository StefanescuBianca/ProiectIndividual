var numQues = 10;

var numChoi = 3;

var answers = [
    "a) 8 planete",
    "c) Eris, Makemake, Pluto",
    "b) Mercur",
    "c) Marte",
    "b) acum 4,6 miliarde de ani",
    "a) 5 planete",
    "b) Soarele",
    "c) Neptun și Uranus",
    "c) Mercur, Venus, Pământ, Marte, Jupiter, Saturn, Uranus, Neptun",
    "a) Jupiter "

]
var rezultat = new Array(2);
var response = new Array();
var final = 0;
var resjson = {}

function getScore() {
  var form = document.getElementById("form")
  var score = 0;
  var currElt;
  var currSelection;
  for (i=0; i<numQues; i++) {
    currElt = i*numChoi;
    for (j=0; j<numChoi; j++) {
      currSelection = form.elements[currElt + j];
      if (currSelection.checked) {
        resjson["q"+( i + 1)] = currSelection.value;
        if (currSelection.value == answers[i]) {
          score++;
          break;
        }
      }
    }
  }

  form.percentage.value = score*10 + "%";/*stabileste valoarea imputului precentage*/

  /*construieste un string cu raspunsurile corecte care este inserat in campul text(textarea) "solutions" */
  var correctAnswers="";
  for (i=1; i<=numQues; i++) {
    correctAnswers += i + ". " + answers[i-1] + "\r\n";
  }
  form.solutions.value = correctAnswers;

  }

var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("ora").innerHTML = d.toLocaleTimeString();
}

$("#submit").click(function () {

    

    getScore();
    if(username == undefined){
        alert("Nu se pot inregistra rezultatele.")
    }else{
        resjson["username"] = username;
        console.log(resjson);
        request = $.ajax({
            url: "test_server.php",
            type: "post",
            dataType: "json",
            data: {"data":resjson},
            success: function (res) { 
             },
             error: function (res){
                let err = res.responseText;
                if(err.includes("<h4>")){
                    // sa imi zici unde voiai tu sa afisezi erorilea
                    err = err.replaceAll("<h4>", "");
                    err = err.replaceAll("<br>", "\n");
                    err = err.replaceAll("</h4>", "");
                    document.getElementById("textarea").value = err;
                }else{
                    alert(res.responseText);
                }
             }
        });
    }

});

