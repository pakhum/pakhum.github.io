<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เกี่ยวกับโรงเรียน</title>
</head>
<link rel="icon" type="image/png" href="ศ.ฒ.png" />
<link rel="stylesheet" href="css.css">
</head>

<body topmargin="0" leftmargin ="0"  class='bg1'>
<div class="header" id="myHeader">
<div class="navbar">
<a href="glorious biography.php">เกียจประวัติของโรงเรียน</a>
  <a href="history.php">ประวัติโรงเรียน</a>
  <a href="map.php">แผนที่โรงเรียน</a>
  <a href="manager.php">คณะผู้บริหาร</a>
  <a href="About.php">เกี่ยวกับโรงเรียน</a>
  <a href="personnel.php">ทำเนียบบุคลากร</a>
  <a href="recommend.php">แนะนำโรงเรียน</a>
  <a href="website.php">เว็บไซต์โรงเรียน</a>
  <a href="voyage.php">การเดินทางมาโรงเรียน</a>
  <a href="wdbboard">เว็บบอร์ด</a>
 
  </div> 
</div>
</div>
<a name="บน">
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="ส่วนหัว1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="ส่วนหัว2.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="ส่วนหัว3.png" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

</div>
<br>


<br>
<table width="100%" border="0">
  <tr>
    <td width="98%" height="1315" align="center" valign="top"><p><img src="เกี่ยวกับโรงเรียน 01.png" width="90%" height="41%" /></p>
    <p>&nbsp;</p>
    <p><img src="เกี่ยวกับโรงเรียน 03.png" width="40%" height="20%" /></p>
    <p><img src="เกี่ยวกับโรงเรียน 02.png" width="35%" height="45%" /></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="เกี่ยวกับโรงเรียน 04.png" width="1242" height="813" usemap="#Map" border="0" /></p>
    <table width="100%" height="1725" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="865" align="center" valign="top"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><img src="เกี่ยวกับโรงเรียน 05.png" width="1242" height="1814" usemap="#Map2" border="0" />
            <map name="Map2" id="Map2"><area shape="rect" coords="616,199,1207,540" href="https://drive.google.com/file/d/1LNAJ7OrikXcNkovXVfVPYA71F3ZI0VGU/view?usp=sharing" /><area shape="rect" coords="36,611,623,944" href="https://drive.google.com/file/d/1cHwFvYZS3sfsGvjoKrrGwQgChc8gvlX_/view?usp=sharing" /><area shape="rect" coords="638,1029,1225,1363" href="https://drive.google.com/file/d/15WMJZ0tL-ZIBPWEhj-1mrA8GHbp9RWY5/view?usp=sharing" />
              <area shape="rect" coords="17,1461,607,1797" href="https://drive.google.com/file/d/1uYGkHoxANFr14gFKOjz4WxvOpgotMtYM/view?usp=sharing" />
            </map>
          </p></td>
      </tr>
</table>
    <p>&nbsp;</p></td>
    <td width="2%">&nbsp;</td>
  </tr>
</table>
<map name="Map" id="Map">
  <area shape="rect" coords="621,22,1220,359" href="https://drive.google.com/file/d/14hdquFQYeb1_T8qzrBioYKbeaofCIZZB/view?usp=sharing" />
  <area shape="rect" coords="19,447,633,796" href="https://drive.google.com/file/d/1hWURQiC5VFefEilptqB4Ur43R-k2NbgS/view?usp=sharing" /> 
</map>
 
 <div class="on">
<a href="#"บน"><img src="บน.png" width="65" height="65" align="left"></a></img>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
  </script>
  <img src="ผู้จัดทำ.png" width="100%" height="23%" align="left">
</body>
</html>

<script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    </script>
    
    <P align=center><STRONG><SPAN lang=TH style="FONT-SIZE: 20pt; FONT-FAMILY: 'Angsana New'">
<A href="http://www.dressupmyspace.com/" target=_blank><U><FONT color=#0000ff></FONT></U></A> 
</MARQUEE>  <MARQUEE style="LEFT: 658px; WIDTH: 100px; POSITION: absolute; TOP: 180px; HEIGHT: 247px" scrollAmount=3 direction=down>
<IMG src="มะลิ.png">
</MARQUEE>  <MARQUEE style="LEFT: 694px; WIDTH: 100px; POSITION: absolute; TOP: 120px; HEIGHT: 216px" scrollAmount=3 direction=down>
<IMG src="มะลิ.png">
</MARQUEE>  <MARQUEE style="LEFT: 738px; WIDTH: 100px; POSITION: absolute; TOP: 34px; HEIGHT: 392px" scrollAmount=2 direction=down
><IMG src="มะลิ.png">
</MARQUEE>  <MARQUEE style="LEFT: 200px; WIDTH: 100px; POSITION: absolute; TOP: 90px; HEIGHT: 544px" scrollAmount=3 direction=down>
<IMG src="มะลิ.png">
</MARQUEE>  <MARQUEE style="LEFT: 890px; WIDTH: 100px; POSITION: absolute; TOP: 140px; HEIGHT: 404px" scrollAmount=4 direction=down>

<P align=center><STRONG><SPAN lang=TH style="FONT-SIZE: 20pt; FONT-FAMILY: 'Angsana New'">
<A href="http://www.dressupmyspace.com/" target=_blank><U><FONT color=#0000ff></FONT></U></A> 
</MARQUEE>  <MARQUEE style="right: 658px; WIDTH: 100px; POSITION: absolute; TOP: 180px; HEIGHT: 247px" scrollAmount=3 direction=down>
<IMG src="มะลิ.png">
</MARQUEE>  <MARQUEE style="right: 694px; WIDTH: 100px; POSITION: absolute; TOP: 120px; HEIGHT: 216px" scrollAmount=3 direction=down>
<IMG src="มะลิ.png">
</MARQUEE>  <MARQUEE style="right: 738px; WIDTH: 100px; POSITION: absolute; TOP: 34px; HEIGHT: 392px" scrollAmount=2 direction=down
><IMG src="มะลิ.png">
</MARQUEE>  <MARQUEE style="right: 200px; WIDTH: 100px; POSITION: absolute; TOP: 90px; HEIGHT: 544px" scrollAmount=3 direction=down>
<IMG src="มะลิ.png">
</MARQUEE>  <MARQUEE style="right: 890px; WIDTH: 100px; POSITION: absolute; TOP: 140px; HEIGHT: 404px" scrollAmount=4 direction=down>


