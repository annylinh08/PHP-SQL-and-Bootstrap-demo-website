<!--Linh Duong -200393657-->
<?php ob_start();

$title = 'Ooops...Something did not quite work as planned';
require_once('header.php'); ?>

    <div class="container">
        <p class="jumbotron">Sorry about that.  But don't worry, our Support Team has already been notified and will get right on it.</p>
    </div>

<?php require_once('footer.php');
ob_flush(); ?>