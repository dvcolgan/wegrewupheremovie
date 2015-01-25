<?php

include 'header.php';

$url = $_GET['p'];

if      ($url == '')          include 'home.php';
else if ($url == 'trailers')  include 'trailers.php';
else if ($url == 'about')     include 'about.php';
else if ($url == 'affiliate') include 'affiliate.php';
else                          include '404.php';

include 'footer.php';
