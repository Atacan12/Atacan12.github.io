<?php


$v = $_GET['v'];







?>



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
     <title>Stream Servis</title>
    <meta name="description" content="canlı maç izle ve bedava maç izle nin en önemlisi bu sitede mobil ligtv">
    <meta name="keywords" content="canlı maç izle, bedava maç izle, mobil lig tv izle, telefondan lig tv izle, mobil hd lig tv izle, mobil maç izle, bedava lig tv izle, lig tv apk">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<style type="text/css">
body{background:#000000;margin:0px;padding:0px;}
</style>
  


<!-- refresh button -->
<img src="https://i.hizliresim.com/tobihv4.png" style="position:absolute;left:5px;top:8px;z-index:5;cursor:pointer;" onclick="location.reload();" alt="Yenile"/>

<!-- /refresh button-->


   
       


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Stream By Dogefatihi</title>
    <link rel="canonical" href="http://ingwebtv9.a0001.net/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.css" />
    <style>
    html,
    body {
        width: 100%;
        height: 100%;
        display: block;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background: #000;
    }
    video,
    .plyr {
        width: 100%;
        height: 100%;
    }
    :root {
        --plyr-color-main: #e41f1f;
    }
</style>
</head>

<body>

<video preload="none" id="player" controls crossorigin></video>

<!-- HLS support -->
<script src="//cdn.jsdelivr.net/hls.js/latest/hls.js"></script>
<!-- Plyr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.7/plyr.min.js"></script>
<script type="text/javascript">
    var video = document.querySelector('video');
    if (Hls.isSupported()) {
        var hls = new Hls();
        hls.loadSource('<?php echo DOMAIN.'/getrok/1.m3u8?v='.$v;?>');
        hls.attachMedia(video);
    }
    var player = new Plyr(video, {
        resetOnEnd: true
    });
</script>

</body>
</html>

