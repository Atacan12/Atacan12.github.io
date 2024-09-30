<?php


$v = $_GET['v'];







?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            padding: 0;
            oncontextmenu: "return false";
            onselectstart: "return false";
            ondragstart: "return false";
            color: #FFFFFF;
        }

        #katman1 {
            position: absolute;
            width: 5px;
            height: 50px;
            z-index: 1;
            left: 100px;
            top: 5px;
        }

        #katman1 img {
            position: absolute;
            right: 0px;
            top: 0px;
            z-index: 5;
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- YENİLE -->
<div id="katman1">
    <img src="https://i.hizliresim.com/tobihv4.png" onclick="location.reload();" alt=""/>
</div>
<!-- YENİLE -->

<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js' type='text/javascript'></script>
<script src='https://cdn.jsdelivr.net/clappr/latest/clappr.min.js' type='text/javascript'></script>
<script src='https://cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js' type='text/javascript'></script>

<div id='player-wrapper' style='width: 100%; height: 100%; position: absolute;'></div>

<script>
    var urls = ["<?php echo DOMAIN.'/getnew3u/1.m3u8?v='.$v;?>"];
    var random = Math.floor(Math.random() * urls.length);
    var url_string = window.location.href;
    var url = new URL(url_string);
    var cid = url.searchParams.get("id");

    $(document).ready(function () {
        var hasPreload = false;
        function skipMethod() {
            $(".skip").css("display", "block ").show();
        }

        var source = "" + urls[random] + "";
        var preloadVideo = 'https://app01.macekle.com//videos/17/86100_191126013730.mp4';

        var player = new Clappr.Player({
            source: hasPreload ? preloadVideo : source,
            parentId: "#player-wrapper",
            autoPlay: true,
            marqueePluginConfig: {
                textContent: '',
                duration: 10000,
                direction: 'left'
            },
            actualLiveTime: false,
            poster: 'https://i.hizliresim.com/f1akesi.jpg',
            strings: {
                'tr-TR': {
                    'live': 'Bfx-Pro',
                    'back_to_live': 'CANLI YAYINA GERİ DÖN',
                    'playback_not_supported': 'Tarayıcınız bu ortamı oynatamıyor. Lütfen farklı bir tarayıcı ile tekrar deneyin'
                }
            },
            plugins: [LevelSelector],
            language: 'tr-TR',
            mediacontrol: {
                buttons: "#fff200",
                seekbar: "#fff200"
            },
            watermark: 'https://i.hizliresim.com/htp2ovp.png',
            watermarkLink: '/',
            position: 'top-right',
            width: "100%",
            height: '100%',
            events: {
                onPlay: function () {},
                onPause: function () {
                    $(".play-wrapper").show().css("display", "block !important");
                },
                onEnded: function () {}
            }
        });

        $('.skip').click(function () {
            if (hasPreload) {
                player.load([source], 'video/mp4', true);
                hasPreload = false;
            }
            $(this).hide();
        });
    });
</script>

<script>
    function skipMethod() {
        $(".skip").css("display", "block ").show();
    }
</script>

</body>
</html>

