<?php

require './Mind.php';


$conf = array();

$Mind = new Mind($conf);


define('DOMAIN', 'https://supdomainsnmatr.duckdns.org/xrot');

define('USERAGENT', 'brafox');

$useragent = 'off';

$ua = USERAGENT;
 if($useragent == 'on'){
         $uasrv = $_SERVER['HTTP_USER_AGENT'];
         if(stristr($uasrv, $ua) === FALSE) {
    $Mind->abort('CMS Panel','Emek Hırsızlığına gerek yok, sonuçları olur ! ');
  }else{
      echo '';
  }
 }
  

 
 

$Mind->route('/', 'app/views/welcome');
$Mind->route('Turkey', 'app/api/Turkey');
$Mind->route('Rokkr', 'app/api/Rokkr');
$Mind->route('getnew3u', 'app/api/getnew3u');
$Mind->route('rokm3u', 'app/api/rokm3u');
$Mind->route('tsrok', 'app/api/tsrok');
$Mind->route('m3ufile', 'app/api/m3ufile');
$Mind->route('play', 'app/api/play');
$Mind->route('Albania', 'app/api/Albania');
$Mind->route('Arabia', 'app/api/Arabia');
$Mind->route('Balkans', 'app/api/Balkans');
$Mind->route('Bulgaria', 'app/api/Bulgaria');
$Mind->route('France', 'app/api/France');
$Mind->route('Germany', 'app/api/Germany');
$Mind->route('Italy', 'app/api/Italy');
$Mind->route('Netherlands', 'app/api/Netherlands');
$Mind->route('Poland', 'app/api/Poland');
$Mind->route('Portugal', 'app/api/Portugal');
$Mind->route('Romania', 'app/api/Romania');
$Mind->route('Russia', 'app/api/Russia');
$Mind->route('Spain', 'app/api/Spain');
$Mind->route('UnitedKingdom', 'app/api/UnitedKingdom');
