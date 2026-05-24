<!DOCTYPE html>
<html lang="en">
<head>
    <title>YoutHub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Youtube mp3 & mp4 Downloader! Faça download de vídeos e músicas do YouTube em MP4 ou MP3 de forma fácil, sem instalar nada. Totalmente grátis!">
    <meta name="keywords" content="youtube downloader, youtube mp3, youtube converter, donwload youtube videos, youtHub,baixar vídeos do YouTube,converter vídeo YouTube para MP3 grátis,como baixar vídeo do YouTube MP4">
    <meta name="author" content="Revolta Cyb3rnetic4">
    <meta name="robots" content="index">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta property="og:title" content="Converta Vídeos e áudios do Youtube - NeoTube">
    <meta property="og:description" content="Autonomia digital exige responsabilidade. Construa. Use. Apoie.">
    <meta property="og:image" content="<?php echo DIR?>/logo.webp">
    <meta property="og:url" content="<?php echo DIR?>">
    <meta property="og:type" content="website">


    <link rel="stylesheet" type="text/css" href=<?php echo DIR . "/app/Template/css/styles.css"?>>
    <link rel="shortcut icon" href="icon.ico" />
    
    
</head>
<body>

    <header class="cyber-header">
    <h1 class="title">₦ɆØ₮Ʉ฿Ɇ ĐØ₩₦ⱠØ₳ĐɆⱤ</h1>     
    <p>Download Youtube Vídeos on MP3 or MP4 for free!</p>
</header>

<section class="text center cyber-section">
    <h2>Baixe Vídeos e músicas do YouTube de Forma Rápida e Fácil</h2>

    <p>
        Basta colar o link do vídeo, escolher o formato desejado (MP4 ou MP3) e clicar em "Converter". 
        Não é necessário instalar nada — tudo acontece direto no seu navegador.
    </p>

    <h3 class='cyber-quote'> Autonomia digital exige responsabilidade. Construa. Use. Apoie. </h3>
</section>

<div class="content-banner-pos hidden">


    </div><!--content-banner-pos-->

<section class="downloader cyber-box">

    <form method="POST" action='convert'>

        <h3>Video or MP3 Download</h3>

        <input id='URL' name='url' type="text" placeholder="Enter your youtube URL">
        <input type='hidden' name='type' value='mp3'>
        
        <div class="buttons">
            <button type="button" id='button-mp3' class="neon-btn">MP3</button>
            <button type="button" id='button-mp4' class="neon-btn">MP4</button>


            <div class="message">
                    <p> </p>
            </div><!--message-->


            <div class="submit">
                <input id="submit" type="submit" value="Converter!" class="neon-main-btn">
            </div>
        </div>

    </form>

</section>

<footer>
    <h3 class='cyber-quote'> Resista ao algoritmo </h3>

    <p class='footer-left'> <a target="_blank" href='https://realidadedistopica.online'> Realidade Distopica Blog</a></p>
    <p class='footer-right'>Copy-Left </p>
</footer>




<div class="overflow hidden"></div>
    <div class="spinner-div hidden">


        <svg class="spinner" height="64px" width="64px">
        <circle class="path" cx="32" cy="32" fill="none" r="28" stroke-width="8"></circle>
        </svg>

        <p class='message-downloader'> Your video is being converted...</p>
    </div><!--spinner-div-->



<script src=<?php echo DIR . "/app/Template/js/jquery.min.js" ?>></script>
<script src=<?php echo DIR . "/app/Template/js/scripts.js"?>>
</script>
</html>
                                                                                                                        

