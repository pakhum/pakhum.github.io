<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เว็บไซต์โรงเรียน</title>
<link rel="icon" type="image/png" href="ศ.ฒ.png" />
<link rel="stylesheet" href="css.css">
</head>

<body class='bg1'>
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

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="87%" height="823" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="50%" height="704" align="center"><img src="เว็บไซต์โรงเรียน 01.PNG" width="569" height="758" usemap="#Map" border="0" /></td>
          <td width="50%" align="center"><img src="เว็บไซต์โรงเรียนอ 02.PNG" width="569" height="757" usemap="#Map2" border="0" /></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<h3>&nbsp; </h3>
<map name="Map" id="Map">
  <area shape="rect" coords="79,696,543,736" href="http://www.sts.ac.th/sport/" />
  <area shape="rect" coords="79,629,547,668" href="http://www.sts.ac.th/art/" />
  <area shape="rect" coords="84,564,549,602" href="http://www.sts.ac.th/foreign/" />
  <area shape="rect" coords="82,498,547,535" href="http://www.sts.ac.th/social/" />
  <area shape="rect" coords="92,435,546,473" href="http://www.sts.ac.th/math/" />
  <area shape="rect" coords="83,369,546,405" href="http://www.sts.ac.th/sci/" />
  <area shape="rect" coords="84,301,547,339" href="http://www.sts.ac.th/pr/" />
  <area shape="rect" coords="79,234,547,273" href="http://www.sts.ac.th/budget/" />
  <area shape="rect" coords="80,172,549,209" href="http://www.sts.ac.th/edu/" />
  <area shape="rect" coords="78,106,547,142" href="http://www.sts.ac.th/" />
</map>
<map name="Map2" id="Map2">
  <area shape="rect" coords="77,364,542,402" href="http://www.sts.ac.th/act/" />
  <area shape="rect" coords="80,297,542,336" href="http://www.sts.ac.th/sevice/" />
  <area shape="rect" coords="74,233,544,270" href="http://www.sts.ac.th/person/" />
  <area shape="rect" coords="73,166,546,204" href="http://www.sts.ac.th/thai/" />
  <area shape="rect" coords="76,102,544,140" href="http://www.sts.ac.th/guide/" />
  <area shape="rect" coords="76,36,546,74" href="http://www.sts.ac.th/vocation/" />
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
