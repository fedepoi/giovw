<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<title>giovanniWebSite</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		
	
</head>  
 <body>
 

 
 
 
 
 <div class="grid-container">
 <div class="item1"></div>
 <div class="item2">
 <ul>
 <li><a href="index.html"><h1>Giovanni Cosmo</h1></a></li>
 <li><a href="index.html">home</a></li>
 <li><a href="#bio">bio</a></li> 
 <li><a href="#opere">opere</a></li>
 <li><a href="#contatti">contatti</a></li>
 </ul>
 </div>
 
 <div class="item3">
 <!-- <div class="divImg"> -->
 <!-- <img src="../img/0_2.jpg" alt="0_2"  > -->
 <!-- <img src="../img/IMG_1836.jpg" alt="IMG_1836"  > -->
 <!-- <img src="../img/isastar.jpg" alt="isastar"  > -->
 <!-- <img src="../img/LAURA-01-620x802.jpg" alt="LAURA-01-620x802"  > -->
 <!-- </div> -->
 
 <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="../img/LAURA-01-620x802.jpg" alt="LAURA-01-620x802"  >
	  
	<?php
    echo "hey";
    $files = scandir('../img');
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
            echo "<img src='$file' />";
        }
    }
?>
	  

  </div>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
 
 
 
 
 
 
 </div>
 </div>
 </body>
</html>