<?php


$v = $_GET['v'];







?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>DOGEFAT力H力 STREAM PLAYER</title>
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

        .plyr__poster {
            background-image: url('https://i.hizliresim.com/tobihv4.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .plyr--video .plyr__controls {
            opacity: 1;
        }

        .plyr__controls .plyr__control--forward,
        .plyr__controls .plyr__control--backward {
            display: block;
        }
    </style>
</head>

<body>
    <video preload="none" id="player" controls crossorigin poster="https://i.hizliresim.com/pes4jjx.png"></video>
    <script src="//cdn.jsdelivr.net/hls.js/latest/hls.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.7/plyr.min.js"></script>
    <script type="text/javascript">
        var video = document.querySelector('video');
        if (Hls.isSupported()) {
            var hls = new Hls();
            hls.loadSource('<?php echo DOMAIN.'/getrok/1.m3u8?v='.$v;?>');
            hls.attachMedia(video);
        }
        var player = new Plyr(video, {
            controls: ['play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen'],
            resetOnEnd: true,
            i18n: {
                restart: 'Yeniden başlat',
                rewind: '10 saniye geri al',
                forward: '10 saniye ileri al',
                seek: 'İleri git',
                volume: 'Ses',
                mute: 'Sessize al',
                unmute: 'Sesi aç',
                captions: 'Altyazılar',
                settings: 'Ayarlar',
                pip: 'PIP',
                airplay: 'AirPlay',
                fullscreen: 'Tam ekran',
                exitFullscreen: 'Tam ekrandan çık',
                speed: 'Hız',
                normal: 'Normal',
                quality: 'Kalite',
                loop: 'Döngü',
                start: 'Başla',
                end: 'Bitir',
                all: 'Tümü',
                reset: 'Sıfırla',
                disabled: 'Devre dışı',
                enabled: 'Etkin',
                advertisement: 'Reklam',
                qualityBadge: {
                    2160: '4K',
                    1440: 'HD',
                    1080: 'HD',
                    720: 'HD',
                    576: 'SD',
                    480: 'SD'
                }
            },
            captions: {
                active: true,
                language: 'auto',
                update: true,
                async: true,
                // Altyazılar için dil seçenekleri
                languages: [
                    {
                        label: 'Türkçe',
                        srclang: 'tr',
                        src: 'https://n.g1noa.buzzhttps://stream.dizipal604.com/srt/00010/ugsnjguhl514_Turkce.vtt'
                    },
                    {
                        label: 'İngilizce',
                        srclang: 'en',
                        src: 'https://n.g1noa.buzzhttps://stream.dizipal604.com/srt/00010/ugsnjguhl514_Ingilizce.vtt'
                    }
                ]
            }
        });

        // İleri geri alma işlevselliğini ekle
        var forwardButton = document.createElement('button');
        forwardButton.className = 'plyr__controls__item plyr__control plyr__control--forward';
        forwardButton.setAttribute('type', 'button');
        forwardButton.setAttribute('aria-label', 'İleri Al');
        forwardButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4l10 8-10 8V4z"></path></svg>';

        var backwardButton = document.createElement('button');
        backwardButton.className = 'plyr__controls__item plyr__control plyr__control--backward';
        backwardButton.setAttribute('type', 'button');
        backwardButton.setAttribute('aria-label', 'Geri Al');
        backwardButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 4l-10 8 10 8V4z"></path></svg>';

        var controlsContainer = document.querySelector('.plyr__controls');
        controlsContainer.insertBefore(backwardButton, controlsContainer.firstChild);
        controlsContainer.appendChild(forwardButton);

        var forwardTime = 10; // İleri alma süresi (saniye)
        var backwardTime = 10; // Geri alma süresi (saniye)

        forwardButton.addEventListener('click', function () {
            video.currentTime += forwardTime;
        });

        backwardButton.addEventListener('click', function () {
            video.currentTime -= backwardTime;
        });

        // Reklam özelliğini ekle
        var adUrl = 'https://content.jwplatform.com/videos/6rTJO2Lc-gssDldZV.mp4'; // Reklam video URL'si
        var adDuration = 5; // Reklam süresi (saniye)

        player.on('ready', function () {
            var adOverlay = document.createElement('div');
            adOverlay.className = 'plyr__ad-overlay';
            video.parentNode.insertBefore(adOverlay, video);

            player.play();

            setTimeout(function () {
                adOverlay.remove();
            }, adDuration * 1000);
        });
    </script>
</body>

</html>
