<?php require_once ('./includes/mail.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'partials/_head.php'; ?>
</head>
<body>
	<?php include 'partials/_navigation.php'; ?>
	<!-- END - NAV -->

	<section class="home" id="home">
		<?php include 'partials/_home.php' ?>
	</section>
	<section class="m-home" id="m-home">
		<?php include 'partials/_m-home.php' ?>
	</section>
	<!-- END - HOME -->

	<section class="offer" id="offer">
		<?php include 'partials/_offer.php'; ?>
	</section>
	<section class="m-offer" id="m-offer">
		<?php include 'partials/_m-offer.php'; ?>
	</section>
	<!--END - OFFER -->

	<section class="free" id="free">
		<?php include 'partials/_free.php'; ?>	
	</section>
	<section class="m-free" id="m-free">
		<?php include 'partials/_m-free.php'; ?>	
	</section>
	<!-- END - FREE  -->

	<section class="services">
		<?php include 'partials/_services.php'; ?>
	</section>
	<section class="m-services">
		<?php include 'partials/_m-services.php'; ?>
	</section>
	<!-- END - SERVICES -->

	<section class="contact" id="contact">
		<?php include 'partials/_contact.php'; ?>	
	</section>
	<section class="m-contact" id="m-contact">
		<?php include 'partials/_m-contact.php'; ?>	
	</section>
	<!-- END - CONTACT -->

	<section class="about" id="about">
		<?php include 'partials/_about.php'; ?>
	</section>
	<section class="m-about" id="m-about">
		<?php include 'partials/_m-about.php'; ?>
	</section>
	<!-- END ABOUT -->

	<section class="pictures" id="pictures">
		<?php include 'partials/_pictures.php'; ?>
	</section>
	<!-- END - PICTURES -->

	<footer class="footer">
		<?php include 'partials/_footer.php'; ?>
	</footer>
	<footer class="m-footer">
		<?php include 'partials/_m-footer.php'; ?>
	</footer>
	<?php include 'partials/_m-navigation.php'; ?> 
	<!-- END - FOOTER -->

	<?php include 'partials/_scripts.php'; ?>
</body>
</html>