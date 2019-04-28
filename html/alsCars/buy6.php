<?php
include ('./headerBase.html');
?>

  <article class="content">
    <p><span class="body_text">

	<h1 style="color:#8B0000">Buyer's Information</h1>
		<p>PLease input your infomation and we will contact you about the car you requested.</p>

<form style="text-align: center" method="post" action="mailto:email@gmail.com">
<br />
<fieldset class="field_set">
<h2 style="color:#8B0000">Please Input Your Information</h2>
	<hr style="size: auto; width: auto"></hr>
<p>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lastname" type="text" /></p>
	<hr style="size: auto; width: auto"></hr>
<p>First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="firstname" type="text" /></p>
	<hr style="size: auto; width: auto"></hr>
<p>E-mail address:&nbsp;&nbsp;<input name="email" type="text" /></p>
	<hr style="size: auto; width: auto"></hr>
<p>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lastname" type="text" /></p>
<p>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lastname" type="text" /></p>
<p>State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lastname" type="text" /></p>
<p>Zipcode:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="lastname" type="text" /></p>
</fieldset>
<br/>
<fieldset class="field_set">
<h2 style="color:#8B0000">Select Car</h2>
<select name="whichcar" size="8" style="color:#8B0000">
<option>THE WALKING CAR</option>
<option>THE BIKE OF THE FUTURE</option>
<option>THE BOOMERANG</option>
<option>THE POD</option>
<option>BIGWHEELS</option>
<option selected="selected">FLYING MONSTER</option>
<option>WALK IN</option>
<option>Style</option>
</select>
</fieldset>
<br />
<fieldset class="field_set">
<h2 style="color:#8B0000">Color(s)</h2>
<input name="color" type="checkbox" value="piano" />Piano
	<input name="color" type="checkbox" value="" />Grey
	<input name="color" type="checkbox" value="cello" />Yellow
	<input name="color" type="checkbox" value="drums" />Green
	<input name="color" type="checkbox" value="opera" />White
	<input name="color" type="checkbox" value="ethnic" />Black
</fieldset>
	<br/>	<br/>
	<button formaction="confirm.php" type="submit" value="Submit" style="color:#8B0000"/>Submit</button>
	<input type="reset" value="Reset" style="color:#8B0000"/>
	
</form>


    
    
    
    
    </span></p>
    

<section> </section>
  <!-- end .content --></article>
<footer style="background-color:lightgrey;"> <i>
  <p>4697 West Invisible Avenue<br>
Triton, Atlantas 77511<br>
1-800-555-5555</p>
</i></footer>
<!-- end .container --></div>

</body>
</html>
