<?php


$v = $_GET['v'];


$options = array(
'header'=>array(
    'Icy-MetaData'=>'1',
    'user-agent'=>'Rokkr/1.7.2 (android)',
)
);
$left = '';
$right = '';
$getts = $this->get_contents($left,$right,$v,$options);

 

header('access-control-allow-origin:*');
//header("Content-Type: video/mp2t");

echo $getts;
