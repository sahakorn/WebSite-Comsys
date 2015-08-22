<?php
	require "config.php";
	session_start();
	if(isset($_SESSION['login_user']))
	{
		header('Location: student-page.php');
		exit;
	}
?>
<html>
	<head>
	<meta charset = "utf-8">
		<title>Computer System.</title>
		  <link rel="stylesheet" type="text/css" href="css/Header.css" />
		  <link rel="stylesheet" type="text/css" href="css/index.css" />
		  <STYLE>
			A:link { color: #F7B810; text-decoration:none}
			A:visited {color: #F7B810; text-decoration: none}
			A:hover {color: #F7B810}
		</STYLE>
		<script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
h2{
    margin: 0;     
    color: #666;
    padding-top: 0px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
    background: #333;    
    text-align: center;
    height: 100%;
	
}
.carousel{
    margin-top: 0px;
}
.bs-example{
	margin: 0px;
}
</style>
	</head>
	<body>
		<div class = "titlepage">
			<div class = "subtitle">
				<img src="images/web.png" width="100%" height="100%">
			</div>
			<div class = "subtext-title" align = "center">
			<font size ="6" color="#EEEEEE" style="text-shadow: 1px 1px #2c3e50;"> <b>ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์ </font><br>
			<font size ="5" color="#EEEEEE" style="text-shadow: 1px 1px #2c3e50;"> Department of Electrical and Computer Engineering.<br>
			คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร</b></font>
			</div>
		</div>
		<div class = "menubar" align="center">
			<a href="index.php"><div class = "menu1" align = "center">
				<b class = "small">หน้าหลัก</b>
			</div>
			</a>
			<a href="login.php"><div class = "menu2" align = "center">

				<b class = "small">เข้าสู่ระบบ</b>
			</div></a>
			<a href="project.php"><div class = "menu3" align = "center">
				<b class = "small">โครงงานนิสิต</b>
			</div></a>
			<a href="about_page.php"><div class = "menu4" align = "center">
			<b class = "small">ติดต่อเรา</b>
			</div></a>
		</div>
		<div class = "mainpage" >
		<center><font face = "ThaiSans Neue" size = "+3.5" color = "#19B5FE"><b>ยินดีต้อนรับเข้าสู่<b></font></center>
			<center><font face = "ThaiSans Neue" size = "+3.5" color = "#019875">แบบฟอร์มโครงงานนิสิตวิศวกรรมคอมพิวเตอร์</font></center>
			<div class = "submain1">
			<center><font face = "ThaiSans Neue" size = "+2" color = "#E4F1FE"><b>ข่าวประชาสัมพันธ์<b></font></center>
	<div class="bs-example">
		<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
		
		
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>   
			
		   <!-- Carousel items -->
			<div class="carousel-inner">
				 <div class="active item">
					<a href ="http://www.ecpe.nu.ac.th/web/viewtopic2.php?topic_id=48"><h2><img src ="images/news/banner2722557.png" width="100%" height="90%"></h2></a>
				</div>
				<div class="item">
					<a href ="http://www.ecpe.nu.ac.th/web/viewtopic2.php?topic_id=67"><h2><img src ="images/news/icesit2015.png" width="100%" height="90%"></h2></a>
				</div>
				<div class="item">
					<a href ="http://www.ecpe.nu.ac.th/web/viewtopic2.php?topic_id=66"><h2><img src ="images/news/NU Award 2015.jpg" width="100%" height="90%"></h2></a>
				</div>
				<div class="item">
					<a href ="http://www.ecpe.nu.ac.th/web/viewtopic2.php?topic_id=65"><h2><img src ="images/news/PromotionYecc2015.jpg" width="100%" height="90%"></h2></a>
				</div>
				<div class="item">
					<a href ="http://www.ecpe.nu.ac.th/web/viewtopic2.php?topic_id=52"><h2><img src ="images/news/visionLab.jpg" width="100%" height="90%"></h2></a>
				</div>
			</div>
			
			
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>
			</div>
		</div>
		<div class = "fooster">
			<center><font face = "ThaiSans Neue" size = "+1.5" color = "#446CB3"><b>ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์  คณะวิศวกรรมศาสตร์ มหาวิทยาลัยนเรศวร   ตำบลท่าโพธิ์ อำเภอเมือง จังหวัดพิษณุโลก  65000<b></font></center> 
			<center><font face = "ThaiSans Neue" size = "+1.5" color = "#446CB3"><b>โทร  0559-6437-3,0559-6437-1 แฟกซ์ 0559-6400-5 อีเมล์</font> <a href = "mailto:ecpe-software@nu.ac.th" ><font class = "link" >ecpe-software@nu.ac.th </font></a> <b></center>
		</div>
		
	</body>
</html>
	