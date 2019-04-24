<?php include("server.php"); ?>	
<!DOCTYPE html>
<html>
<head>
	<title>Rishabh Academy</title>
	<link rel="stylesheet" type="text/css" href="../css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="../css/slid.css">
	<link rel="stylesheet" type="text/css" href="../css/Rishabh_Academy.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link href="img/logos.png" rel="shortcut icon">
</head>

<body>
	<header>
		<div class="logo">
		    <img src="../img/logo.png" style="margin-top: 20px;">
		</div>
		<div class="menu">
			<nav>
				<ul>
					<li><?php if (isset($_SESSION['username'])): ?>
					   <p style="color: white">Welcome <strong><?php echo $_SESSION["username"]; ?></strong></p><br>
					   <p><a href="index.php?logout='1'" style="color: white; " class="log">Logout</a></p>
					   <?php endif ?></li>
					<li class="log"></li>
					<li><a href="https://www.facebook.com/Rishabh-Academy-1950154681923413/"><img src="../img/fb.png"></a></li>
					<li><a href="https://twitter.com/search?q=rishabh%20academy%20meerut&src=typd&lang=en"><img src="../img/twitter.png"></a></li>
				</ul>
			</nav>
		</div>
	</header><hr>
    <marquee id="mark"><pre>Admissions are Open now Hurry Up!!!                        Admissions are Open now Hurry Up!!!                       Admissions are Open now Hurry Up!!!                        Admissions are Open now Hurry Up!!!                       Admissions are Open now Hurry Up!!!</pre></marquee>
	
	<div id="sidebar">
		<div class="toggle-btn" onclick="document.getElementById('sidebar').classList.toggle('active');">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="../aboutrishabh.html">About</a></li>
			<!--Comment<li><a href="rishabhraw.html">Academics</a></li>
			<li><a href="rishabhraw.html">Activities</a></li>-->
			<li><a href="../gallery.html">Gallery</a></li>
			<!--<li><a href="rishabhraw.html">Facilities</a></li>
			<li><a href="rishabhraw.html">Alumni Speak</a></li>
			<li><a href="rishabhraw.html">Downloads</a></li>-->
			<li><a href="../rishabhcontact.html">Contact Us</a></li>
		</ul>
	</div>

	<section id="content">
			<div class="wrapper">
				<div id="main">
		            <div id="box">
		                <img src="../img/jk.jpg">
	                </div>
                    <button id="prev" onclick="prevturn()"><b style="color: white;"><</b></button>
		            <button id="nxt" onclick="nxturn()"><b style="color: white;">></b></button>
	            </div>
	            <script type="text/javascript">
		           var slider_content=document.getElementById("box");
		           var image=['jk','gh','fg','gb'];
		           var i=image.length;

		           function nxturn(){
			        if(i<image.length){
				        i=i+1;
			        }
			          else{
				        i=1;
			        }
			        slider_content.innerHTML="<img src=../img/"+image[i-1]+".jpg>";

		            }

		            function prevturn(){
			           if(i<image.length+1 && i>1){
				        i=i-1;
			           }
			            else{
				         i=image.length;
			           }
			            slider_content.innerHTML="<img src=../img/"+image[i-1]+".jpg>";
                       }
                        setInterval(nxturn,2000);
	            </script>



	            
	            
            
                <table>
                	<th></th>
                	<tr><td id="notif"><marquee onmouseout="this.start();" onmouseover="this.stop();" scrollamount="2" id="marquee" direction="up" style="height:122px;">
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Annual Drawing Competition is going to held on 1st August.</a></li>
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Invstiture Ceremony Photos</a></li>
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Fee Chart Changed.</a></li>
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Winners of Annual Debate Comeptiton announced</a></li>
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Winners of Annual Debate Comeptiton announced</a></li>
                <li><img src="../img/point.png"><a href="GO_1819/pre matric time table.pdf" style="color: #337ab7; font-weight:500;" target="_blank">Time-Table for Prematric Scholarship (2018-19) Dated: 09-April-2018</a></li>
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Annual Drawing Competition is going to held on 1st August.</a></li>
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Invstiture Ceremony Photos</a></li>
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Fee Chart Changed.</a></li>
                        </marquee></td>

                <td><img src="../img/fg.jpg" height="200px" width="500px" style="border: 1px solid black"></td>        
                      <td id="notif"><marquee onmouseout="this.start();" onmouseover="this.stop();" scrollamount="2" id="marquee" direction="up" style="height:122px;">
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Annual Drwaing Competition is going to held on 1st August.</a></li>
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Invstiture Ceremony Photos</a></li>
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Fee Chart Changed.</a></li>
                <li><img src="../img/point.png"><a href="" style="color: #337ab7; font-weight:500;">Winners of Annual Debate Comeptiton announced</a></li>
                <li><img src="../img/point.png"><a href="GO_1819/pre matric time table.pdf" style="color: #337ab7; font-weight:500;" target="_blank">Time-Table for Prematric Scholarship (2018-19) Dated: 09-April-2018</a></li>
                        </marquee></td></tr>
                </table>

				<h1>Rishabh Academy</h1>
				<p align="justify" style="background: #e2e2e2;">A school is very genuine place like a temple where we go daily to learn and study to go ahead in our life. We pray to God daily in the school for our better lives and proper study. We say good morning to our class teacher daily and she responses with her smiling face. Our school has a big garden back to the school building. School is the place where we learn everything with the help of our teachers. They help us in working hard for our study and make us tough to go ahead in our life. They tell us about cleanliness, hygiene and proper healthy diet.
</p><p align="justify" style="background: #e2e2e2;">
Our teacher always motivates us to take part in the sports activity, quiz competitions, oral and written activities, debates, scouting, group discussion and other activities in the school. Our class teacher teaches us to maintain discipline of the school and keeps the school compound clean and tidy. Our principal tells us motivational messages daily on the stage of prayer. We learn to be honest, truthful, obedient and sincere in our whole life. We learn how to concentrate on the study in the class room. Our school organizes a quiz competition, dance competition and sports competition annually which is compulsory for us to participate.</p>


			</div>

		</section>
		<div id="quote">
		<pre><i>"Education is
an ornament in 
prosperity
and a refuge in 
adversity."</i></pre>
	</div>
		<hr>
	<footer>
		<div class="copy">
			<p> 215 A, West End Road, Meerut Cantt, U.P. India.</p><hr>
			<p>Mail us at: rishabh.academy1992@gmail.com | OR | Cont:  0121-2652993, 2646160</p>
			<hr>
			<p>&copy 2018 Copyright. All Rights Reserved</p>
		</div>
	</footer>

</body>
</html>