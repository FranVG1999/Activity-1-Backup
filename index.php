<?php session_start();
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  
<style>
body {
  background-image: url('aesthetic.gif');
  background-size: 100%;
}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</style>
</head>
<body>

<section>
  <center>
  <img class="mySlides" src="howls_moving_castle.jpg"
  style="width:500px">
  <img class="mySlides" src="My_Neighbor_Totoro.jpg"
  style="width:500px">
  <img class="mySlides" src="Spirited_Away.jpg"
  style="width:500px">
  </center>
</section>

<center>
  <h2 class="w3-wide">Studio Ghibli</h2>
  <p class="w3-opacity"><i>株式会社スタジオジブリ</i></p>

  <audio controls autoplay>
  <source src="Howl.mp3" type="audio/mpeg">
</audio> 

  <p class="w3-justify">Studio Ghibli Inc. is a Japanese animation film studio headquartered in Koganei, Tokyo. The studio is best known for its animated feature films, and has also produced several short films, television commercials, and one television film. The studio's mascot and most recognizable symbol is the character, Totoro, a giant cat-like spirit from the studio's 1988 film My Neighbor Totoro. Studio Ghibli's highest grossing films include Spirited Away (2001), Ponyo (2008), and Howl's Moving Castle (2004). The studio was founded on June 15, 1985 by directors Hayao Miyazaki and Isao Takahata and producer Toshio Suzuki, after the success of Topcraft's anime film Nausicaä of the Valley of the Wind (1984). Studio Ghibli has also collaborated with video game studios on the visual development of several video games. </p>
  
  </center>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>
<center>
	<form action="logout.php">
    <input type="submit" value="Logout" />
</form>
</center>