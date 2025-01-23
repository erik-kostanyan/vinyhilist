<?php
ob_start();
// include header.php file
include ('header.php');

/*  include cart items if it is not empty */
count($product->getData('cart')) ? include ('templates/_cart-template.php') :  include ('templates/_cart_notFound.php');

// include footer.php file
include ('footer.php');

?>