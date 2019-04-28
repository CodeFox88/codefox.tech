<?php
include ('../header.html');
?>

<!--contact-->

<div class="dots">
<a class="dot arrowL" href="/pages/other.php">Other<b> <<</b></a>
<a class="dot" href="/pages/contact.php" style="background-color: #a0f1ff">Contact</a>
<a class="dot arrowR" href="/index.php"><b>>> </b>Home</a>
</div>

	<div>
    	<section class="w3-container">
    		<div class="margin tab">
				<h2>Contact</h2>
				
				<div class="row">
					<div class="column h4">
					<h4><img src="/img\icons\house.jpg" class="" style="width:30px;height:30px;border-radius: 8px;">&nbsp&nbspCody Fox</h4>
					<h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCodeFox</h4>
					<h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspChicagoland</h4>
					<h4><img src="/img\icons\phone.jpg" class="" style="width:30px;height:30px;border-radius: 8px;">&nbsp&nbsp(708) 415-3906</h4>
					<h4><img src="/img\icons\email.jpg" class="" style="width:30px;height:30px;border-radius: 8px;">&nbsp&nbspcodyfox@codefox.tech</h4>
					<h4><img src="/img\icons\linkedin.png" class="" style="width:30px;height:30px;border-radius: 8px;">
					<a style="text-decoration: none;" href="https://www.linkedin.com/in/codefox" target="_blank">&nbsplinkedin.com/in/codefox</a>
					</h4>
					<h4>
					<!-- <img src="/img\icons\android.jpg" class="" style="width:30px;height:30px;border-radius: 8px;">&nbsp
					<img src="/img\QR_Code.png" class="" style="width:150px;height:150px;border-radius: 8px;">&nbsp -->
					</h4>
					</div>
					<div class="column h4">
						
						<form  onsubmit=" submitPopUp()" name="myform" target="hiddenFrame" action="https://docs.google.com/forms/d/e/1FAIpQLSfcxbSkD5Hcqo2ozY1N7OFefDgugbXkcs6yurYdG3QEb8KQgw/formResponse" method="POST">
							<label for="Name">Name:</label>
							<input type="text" name="entry.2005620554" id="formbox" required><br><br>
							
							<label for="Email">Email:</label>
							<input type="email" name="entry.1045781291" id="formbox" required><br><br>
							
							<label for="">Message:</label>
							<textarea name="entry.839337160" rows="4" cols="21" id="formbox" required></textarea><br><br>
							<br>
							<div class="popup" style="margin-left: 57px;">
							<input class="button" type="submit" value="Send" id="formbox">
							<span class="popuptext" id="myPopup">Message Received</span>
							</div>
						</form>
						<iframe name="hiddenFrame" style="display: none;"></iframe>
						
						<style>
							#formbox {
							background-color: rgba(255,255,255,.2);
							border-radius: 5px;
							color: white;
							}
							
							.popup .popuptext {
								visibility: hidden;
								width: 140px;
								height: 25px;
								background-color: green;
								color: #fff;
								text-align: center;
								border-radius: 6px;
								position: absolute;
								z-index: 1;
								bottom: 125%;
								left: 37px;
								margin-left: -80px;
							}

							/* Toggle this class - hide and show the popup */
							.popup .show {
								visibility: visible;
								-webkit-animation: fadeIn 1s;
								animation: fadeIn 1s;
							}
							@-webkit-keyframes fadeIn {
								from {opacity: 0;} 
								to {opacity: 1;}
							}

							@keyframes fadeIn {
								from {opacity: 0;}
								to {opacity:1 ;}
							}

							.popup {
								position: relative;
								display: inline-block;
								cursor: pointer;
								-webkit-user-select: none;
								-moz-user-select: none;
								-ms-user-select: none;
								user-select: none;
							}
						</style>
						
						<script>
						// When the user clicks on div, open the popup
						function submitPopUp() {
							if (formbox != null){
							var popup = document.getElementById("myPopup");
							popup.classList.toggle("show");
							}
							setTimeout(clear, 1); 
						}
						
						function clear() {
							if (formbox != null){
							document.myform.reset();
							}
						}
						</script>
						
					</div>
				</div>
			</div>
		</section>
	</div>

<?php
include ('../footer.html');
?>
