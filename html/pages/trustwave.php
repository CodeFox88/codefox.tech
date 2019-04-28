<?php
include ('../header.html');
?>

<div class="dots">
<a class="dot" href="/pages/aboutMe.php">About Me<b> <<</b></a>

<a class="dot" href="/pages/trustwave.php" style="background-color: #a0f1ff">Trustwave</a>

<a class="dot" href="/pages/purdue.php"><b>>> </b>Purdue</a>
</div>

<!--trustwave-->

<section class="w3-container">
<div class="margin tab">

<img src="/img\trustwave1.png" style="width:200px;height:60px;text-align: left;">

<h2>Cyber Security Intern</h2>

<br/>

<button class="accordion ">Job Duties</button>
	<div class="panel">
		<div class="row">
			<div class="column">
				<img src="/img\trustwave12.jpg" class="imgt" style="width:200px;height:200px;">
			</div>
			<div class="column">
		 		<ul>
				      <li>Software design, development, and implementation</li>
				      <li>Utilize and create intelligence systems to correlate attack data and determine classification</li>
				      <li>Data research, develop solutions and escalation procedure</li>
				      <li>Analyze and respond to security threats</li>
				      <li>System, log, and Malware analysis</li>
				      <li>Forensics drive analysis and response</li>
				 </ul>
		 		 <a href="http://www.chicagotribune.com/news/media/104029030-132.html" class="trustwave-indent"> Chicago Tribune</a>
				 &nbsp&nbsp
		  		<a href="https://www.builtinchicago.org/2018/09/12/trustwave-opens-international-cybersecurity-center-chicago"> Built In Chicago</a>
		  		<br/>
			</div>
		</div>
	</div>

<button class="accordion">Our Story</button>
	<div class="panel">
		<div class="row">
			<div class="column">
				<img src="/img\trustwave13.jpg" class="imgt" style="width:200px;height:200px;">
			</div>
			<div class="column">
				<p class="plm">Trustwave helps businesses fight cybercrime, protect data and reduce security risk. 
						With cloud and managed security services, integrated technologies and a team of 
						security experts, ethical hackers and researchers, Trustwave enables businesses to 
						transform the way they manage their information security and compliance programs. 
						More than three million businesses are enrolled in the Trustwave TrustKeeper® cloud 
						platform, through which Trustwave delivers automated, efficient and cost-effective 
						threat, vulnerability and compliance management. Trustwave is headquartered in 
						Chicago, with customers in 96 countries.
				<br/><a href="https://www.trustwave.com/home/"> Click here for more.</a></p> 
			</div>
		</div>
	</div>

<button class="accordion">SpiderLabs Fusion Center</button>
	<div class="panel">
		<div class="row">
			<div class="column">
				<img src="/img\trustwave2.jpg" class="imgt" style="width:200px;height:200px;">
			</div>
			<div class="column">
				<p class="plm">The Trustwave SpiderLabs Fusion Center is a state-of-art 6,000 square foot cybersecurity command center located in Chicago 
						with the ability to monitor for, detect, and instantly kill threats anywhere inside an organization’s environment down to 
						individual endpoints, a feat unprecedented in managed security. Housed within the center are highly specialized 
						multidisciplinary strike teams formed from Trustwave SpiderLabs, an elite group of ethical hackers, threat hunters, 
						incident responders and advanced researchers. These units infused into the company’s globally dispersed network of ten 
						Advanced Security Operation Centers (ASOCs) drive immediate action and response as security incidents emerge.
				<br/><a href="https://www.trustwave.com/Services/Managed-Security/SpiderLabs-Fusion-Center/">Click here for more.</a></p>
			</div>
		</div>
	</div>

<button class="accordion">SpiderLabs</button>
	<div class="panel">
		<div class="row">
			<div class="column">
				<img src="/img\trustwave10.jpg" class="imgt" style="width:200px;height:200px;">
			</div>
			<div class="column">
				<p class="plm">Businesses worldwide depend on the global SpiderLabs team at Trustwave to keep them ahead of the latest security threats. 
					Our security breach investigations, malware reverse-engineering projects, millions of scans, thousands of penetration tests, 
					leadership of open-source security projects and contributions to the security community have established Trustwave SpiderLabs 
					as world-renowned experts on the past, present and future of security. The SpiderLabs team at Trustwave includes security and 
					penetration testers, incident responders, forensic investigators, malware reversers, security researchers, published authors 
					and sought-after speakers.
				<br/><a href="https://www.trustwave.com/Company/SpiderLabs/">Click here for more.</a></p>
			</div>
		</div>
	</div>
</div>
</section>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<br/>
<?php
include ('../footer.html');
?>
