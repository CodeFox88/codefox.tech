<?php
include ('../header.html');
?>

<div class="dots">
<a class="dot arrowL" href="/pages/purdue.php">Purdue<b> <<</b></a>
<a class="dot" href="/pages/projects.php" style="background-color: #a0f1ff">Projects</a>
<a class="dot arrowR" href="/pages/experience.php"><b>>> </b>Experience</a>
</div>

<!--snake-->
	<div>
    	<section class="">
    		<div class="margin">
			<div class="">
				<h2>Snake Surprise</h2>
				
				<div id="container">

				</div>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
				<script src="/snake\snake.js"></script>
				<div>
				<script>
					(function () {
						if ($(window).width() > 750)
						initSnake("container", 20, 40, 100);
						else
						initSnake("container", 15, 15, 100);	
					})();
				</script>
				</div>
			</div>
			</div>
		</section>
	</div>

<?php
include ('../footer.html');
?>
