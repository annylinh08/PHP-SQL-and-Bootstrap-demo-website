<!--Linh Duong - 200393657-->

<!--Create 404 error in case user types wrong URL-->
<!--When they go to wrong page this message is going to pop up-->
<?php ob_start();

$title = 'Ooops...Please try another page';
require_once('header.php'); ?>

<div class="container">
	<p class="jumbotron">I am sorry you have navigated to this page...and found nothing!  Try one of the links at the top of the page.</p>
</div>

<?php require_once('footer.php'); 
ob_flush(); ?>