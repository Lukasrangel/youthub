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

    <link rel="stylesheet" type="text/css" href=<?php echo DIR . "/app/Template/css/styles.css"?>>
    <link rel="shortcut icon" href="icon.ico" />
    
    
</head>
<body>

    <header>
        <h1 style='margin-bottom:98px' class="title"> YoutHubDownloader </h1>     

        <p> Download Youtube Vídeos on MP3 or MP4 for free! </p>
    </header>

    
    <div class="content-banner-pos hidden">


    </div><!--content-banner-pos-->

    <section class="adsense">
        <h1> AdSense </h1>

    </section><!--adsense-->

    <section class="text center">

     <h2> Baixe Vídeos do YouTube de Forma Rápida e Fácil </h2>

    <p> Quer salvar seus vídeos favoritos do YouTube para assistir offline? 
        Nosso site oferece uma maneira simples, rápida e gratuita de baixar vídeos em alta qualidade. 
        Basta colar o link do vídeo, escolher o formato desejado (MP4 ou MP3) e clicar em "Converter". 
        Não é necessário instalar nada — tudo acontece direto no seu navegador.

     <h3> Comece agora mesmo e tenha seus vídeos sempre à mão! </h3>
    </section>
    
    <section class="downloader">

        <form method="POST" action='convert'>

            <h3> Video or MP3 Download</h3>

            <input id='URL' name='url' type="text" placeholder="Enter your youtube URL">
            <input type='hidden' name='type' value='mp3'>
            
            <div class="buttons">
                <div class="button-mp3">
                    <button id='button-mp3' > MP3 </button>
                </div><!--button-mp3-->


                <div class="button-mp4">
                    <button id='button-mp4'> MP4 </button>
                </div><!--button-mp4-->

                <div class="message">
                    <p> </p>
                </div><!--message-->

                <div class="submit">
                    <input title='Download youtube vídeo' id="submit" type="submit"  value="Converter!">
                </div><!--submit-->

            </div><!--buttons-->
        </form>

    </section><!--downloader-->

    <div class="overflow hidden"></div>
    <div class="spinner-div hidden">


        <svg class="spinner" height="64px" width="64px">
        <circle class="path" cx="32" cy="32" fill="none" r="28" stroke-width="8"></circle>
        </svg>

        <p class='message-downloader'> Your video is being converted...</p>
    </div><!--spinner-div-->
    


    <footer>

        <p> YoutHubDownloader is a free tool, we are not responsible for copyright infringement</p>

    </footer>
</body>

<script src=<?php echo DIR . "/app/Template/js/jquery.min.js" ?>></script>
<script src=<?php echo DIR . "/app/Template/js/scripts.js"?>>
</script>
</html>