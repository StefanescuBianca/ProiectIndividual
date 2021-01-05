<?php  session_start(); ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Sistemul Solar</title>
<link href="css/a.css" rel="stylesheet" />
</head>

<script>
<?php if(isset($_SESSION["username"])) : ?>
  var username = "<?php echo $_SESSION["username"]; ?>"
<?php else : ?>
  var username = undefined;
<?php endif;?>
</script>

<body background="1.webp" >
<div id="info">
  <div  align="right"><p id="ora"></p></div>
  <h1>Test grilă</h1>
<form id="form" method="post" name="quiz" action="test_server.php" style="color:white" >
1. Câte planete se rotesc în jurul Soarelui?<br/>
 <input type="radio" name="q1" value="a) 8 planete">a) 8 planete<br/>
 <input type="radio" name="q1" value="b) 5 planete">b) 5 planete<br/>
 <input type="radio" name="q1" value="c) 13 planete">c) 13 planete<br/><br/>


2.Care dintre urmatoarele planete sunt planete pitice?<br/>
 <input type="radio" name="q2" value="a) Ceres, Pluto, Uranus">a) Ceres, Pluto, Uranus<br/>
 <input type="radio" name="q2" value="b) Neptun, Jupiter, Uranus">b) Neptun, Jupiter, Uranus<br/>
 <input type="radio" name="q2" value="c) Eris, Makemake, Pluto">c) Eris, Makemake, Pluto<br/><br/>


3. Care este planeta cea mai apropiată de Soare?<br />
 <input type="radio" name="q3" value="a) Venus ">a) Venus <br/>
 <input type="radio" name="q3" value="b) Mercur">b) Mercur<br/>
 <input type="radio" name="q3" value="c) Jupiter">c) Jupiter<br/><br/>


4. Pe ce planetă se găsește cel mai înalt munte cunoscut al Sistemului Solar?<br />
 <input type="radio" name="q4" value="a) Uranus">a) Uranus<br/>
 <input type="radio" name="q4" value="b) Pământ">b) Pământ<br/>
 <input type="radio" name="q4" value="c) Marte">c) Marte<br/><br/>


5. Cand s-a format Sistemul Solar?<br/>
 <input type="radio" name="q5" value="a) acum 3,5 miliarde de ani">a) acum 3,5 miliarde de ani <br/>
 <input type="radio" name="q5" value="b) acum 4,6 miliarde de ani">b) acum 4,6 miliarde de ani<br/>
 <input type="radio" name="q5" value="c) acum 4 miliarde de ani">c) acum 4 miliarde de ani<br/><br/>


6. Câte planete pitice se rotesc în jurul Soarelui?<br/>
 <input type="radio" name="q6" value="a) 5 planete">a) 5 planete<br/>
 <input type="radio" name="q6" value="b) 7 planete">b) 7 planete<br/>
 <input type="radio" name="q6" value="c) 3 planete">c) 3 planete<br/><br/>


7. Care este cel mai masiv obiect al Sistemului Solar?<br/>
 <input type="radio" name="q7" value="a) Jupiter ">a) Jupiter <br/>
 <input type="radio" name="q7" value="b) Soarele">b) Soarele<br/>
 <input type="radio" name="q7" value="c) Marte">c) Marte<br/><br/>


8. Ce planete sunt numite „giganți de gheață”?<br/>
 <input type="radio" name="q8" value="a) Uranus și Saturn">a) Uranus și Saturn<br/>
 <input type="radio" name="q8" value="b) Neptun și Jupite">b) Neptun și Jupiter<br/>
 <input type="radio" name="q8" value="c) Neptun și Uranus">c) Neptun și Uranus<br/><br/>


9. Cum se numesc planetele din Sistemul Solar?<br/>
 <input type="radio" name="q9" value="a) Mercur, Venus, Pământ, Marte, Uranus, Neptun">a) Mercur, Venus, Pământ, Marte, Uranus, Neptun<br/>
 <input type="radio" name="q9" value="b) Jupiter, Saturn, Uranus, Neptun, Pluto, Eris">b) Jupiter, Saturn, Uranus, Neptun, Pluto, Eris<br/>
 <input type="radio" name="q9" value="c) Mercur, Venus, Pământ, Marte, Jupiter, Saturn, Uranus, Neptun">c) Mercur, Venus, Pământ, Marte, Jupiter, Saturn, Uranus, Neptun<br/><br/>


10. Care este planeta cea mai mare ca marime? <br/>
 <input type="radio" name="q10" value="a) Jupiter ">a) Jupiter <br/>
 <input type="radio" name="q10" value="b) Saturn ">b) Saturn <br/>
 <input type="radio" name="q10" value="c) Uranus ">c) Uranus <br/><br/>


<input id="submit" type="button" value="Scorul tău">
<input type="reset" value="Reia intrebările"></br><br/>
<strong>Scorul dumneavoastră la acest test este <input disabled class="bgclr" type="text" size="5" name="percentage" ></strong><br/><br/>

<strong>Raspunsuri corecte:</strong><br/>
<textarea disabled id="textarea" class="bgclr" name="solutions" wrap="virtual" rows="11" cols="45" style="color: #FFF; background-color:#151515; border:0px; font-weight:bold">
Aici vor apărea răspunsurile corecte, după completarea testului.
</textarea>

</form>


</div>
<div id="meniu">
  <div id="butoane">
    <div id="butoane_1">
      <div id="buton"><a href="index.html">Home</a></div>
      <div id="buton"><a href="despre.html">Sistemul Solar</a></div>
      <div id="buton"><a href="planete.html">Planetele Sistemului Solar</a></div>
	    <div id="buton"><a href="test.php">Test grilă</a></div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="script.js" ></script>

</body>

</html>
