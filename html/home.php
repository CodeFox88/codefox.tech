<!--
<!--redirect mobile--
<script type="text/javascript">
<!--
if (screen.width <= 750) {
document.location = "/mobile/index.php";
}
</script>
<!--redirect iphone--
<script language=javascript>

if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
   location.replace("http://url-to-send-them/iphone.html");
}

</script>
-->

<header>
	<div class="triangle left">
	<div class="margin">
	   	<section class="w3-container">
			<br/>
			<br/>
			
			
			<div class="row">
				<div class="column">
					<img src="img\CodeFox.png" class="imgl foxlogo">
				</div>
				<div class="column" styl="margin:50%;">
					<h1 style="font-size: 60px; ">&nbsp;&nbsp;Cody Fox</h1> 
				</div>
			</div>
			
        	
    	</section>
	</div>
	</div>
	<div class="triangle right">
	     <div class="margin">
	   	<section class="w3-container">
			<br/>
			<br/>
			
			
			<div class="row">
				<div class="column">
					<img src="img\CodeFox.png" class="imgl foxlogo">
				</div>
				<div class="column" styl="margin:50%;">
					<h1 style="font-size: 60px; ">&nbsp;&nbsp;Cody Fox</h1> 
				</div>
			</div>
			
        	
    	        </section>
	     </div>
	</div>
	<button onclick="showAboutme()"></button>
	
</header>

<!--about me-->	
<?php
include ('./pages/aboutMeHome.php');
?>	
	
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script  src="./js/transitions.js"></script>
