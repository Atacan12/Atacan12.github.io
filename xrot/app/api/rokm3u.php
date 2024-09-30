<?php

$v = base64_decode($_GET['v']);


$options = array(
'header'=>array(
    'Icy-MetaData'=>'1',
    'user-agent'=>'Rokkr/1.7.2 (android)',
)
);
$left = '';
$right = '';
//$getts = $this->get_contents($left,$right,$v,$options);

echo '#EXTM3U
#EXT-X-VERSION:3
#EXTINF:0,
https://grotchanellarea.site/grot/gram/tsrok/?v='.base64_encode($v).'
';



//readfile($v);
//echo $getts;


header('Access-Control-Allow-Origin: *');



header('content-disposition: attachment');

//header('content-type: video/mp2t');


