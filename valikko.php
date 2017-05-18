<!--Sivuston logo-->
<div class="ylapalkki">
	<div class="logo">
		<a href="index.php"><img src="kuvat/logo.png"></a>
	</div>
</div>
<!--Sivuston valikko-->
<div class="valikko">
	<ul class="navigointi" id="ylanavi">
		<a href="index.php"><li>Miten tää toimii?</li></a>
		<a href="tulokset.php"><li>Palveluun -></li></a>
		<a href="toimii.php"><li>Mikä ihmeen tasoitus?</li></a>
		<a href="yleisurheilu.php"><li>Yleisurheilu harrastuksena</li></a>
	<?php
			if (strlen($_SESSION['tunnus'])<1) {
		?>
		<a href="login.php"><li>Kirjaudu sisään -></li></a>
			<?php } else{?>
		<a href="login.php"><li>Oma tili -></li></a>
			<?php }; ?>
		<li class="navik"><a href="javascript:void(0);" onclick="valikko()">&#9776;</a></li>
	</ul>
</div>

<script>
  function valikko() {
    var x = document.getElementById("ylanavi");
    if (x.className === "navigointi") {
        x.className += " responsive";
    } else {
        x.className = "navigointi";
    }
}
</script>