<?php
include ('./headerBase.html');
?>
<script>
function myFunction() {
    var x = Math.floor((Math.random() * 99999999) + 10000000);
    document.getElementById("demo").innerHTML = x;
}
</script>

  <article class="content">
	<br/><br/><br/>
    <h1><span class="body_text">Confirm!</span></h1>
    <p><span class="body_text">Thank you for your order. We will review your order and get back to you within 72 hours.
    <br><br>
    Please leave us your feedback and recieve your confirmation number:
    
    <form  action="mailto:">
    <p>Comments:<input style="width:400px; height:50px" name="feedback" type="text" />
    <button type="submit" value="Submit" onclick="myFunction()">Submit & Confirm</button>
    </p>
    <p>Confirmation number:</p><p id="demo"></p>
    </form>
    

<section> </section>
  <!-- end .content --></article>

  <img src="assets/delorean-side.png" alt="delorean" width="950" height="350" />
  
  <footer style="background-color:lightgrey;"> <i>
<p>4697 West Invisible Avenue<br>
Triton, Atlantas 77511<br>
1-800-555-5555</p>
</i></footer>
<!-- end .container --></div>

</body>
</html>
