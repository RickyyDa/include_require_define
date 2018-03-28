<?php
include('head.php');
include('connectvars.php');

$dbc = mysqli_connect($host,$user,$pass,$db) or die('error connecting');
echo 'Succes!';
include('footer.php');