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
                                                                                                                        

<style>


.banner-cyberpunk {
    position: relative;
    background: url('/caminho/da/imagem.png') center/cover no-repeat;
    padding: 60px 20px;
    border-radius: 12px;
    overflow: hidden;
    color: #fff;
    text-align: center;
}

/* 🔥 overlay escuro + roxo */
.banner-cyberpunk .overlay {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at center, rgba(90,0,150,0.4), rgba(0,0,0,0.9));
    backdrop-filter: blur(2px);
}

/* conteúdo acima do overlay */
.banner-cyberpunk .content {
    position: relative;
    z-index: 2;
}

/* 🔥 título neon */
.banner-cyberpunk h1 {
    font-size: 28px;
    color: #c084fc;
    text-shadow:
        0 0 5px #a855f7,
        0 0 10px #9333ea,
        0 0 20px #7e22ce;
}

/* texto */
.banner-cyberpunk p {
    margin: 20px 0;
    color: #ddd;
}

/* 🔥 link neon */
.pix-link {
    display: inline-block;
    margin: 20px 0;
    color: #e879f9;
    text-decoration: none;
    border-bottom: 1px solid #e879f9;
    text-shadow: 0 0 5px #e879f9;
}

/* 🔥 botão cyberpunk */
.download-btn {
    background: transparent;
    border: 2px solid #a855f7;
    padding: 12px 25px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 8px;
    height: 45px;

    box-shadow:
        0 0 10px #a855f7,
        inset 0 0 10px #a855f7;

    transition: 0.3s;
}

.download-btn a {
    display:block;
    width: 100%;
    height: 100%;

    text-decoration: none;
    color: white;
}

.download-btn:hover {
    background: #a855f7;
    box-shadow:
        0 0 20px #c084fc,
        0 0 40px #a855f7;
}

.pix-link {
        animation:
        neonPulse 3s ease-in-out infinite,
        glitchNeon 6s infinite;
}

</style>


<div class="banner-cyberpunk">
    <div class="overlay"></div>

    <div class="content">
        <h1>Considere fazer uma doação por Pix acessando o link abaixo!</h1>

        <p>
            Manter este serviço funcionando requer tempo para manutenção
            e energia para hospedagem! Um site online demanda um computador real!
        </p>

        <a href="https://livepix.gg/cyb3rpunk" target="_blank" class="pix-link">Link pix para me doar um café!</a>
        <br /><br />
        

     <button id="downloadYourFile" class="download-btn">Download your file</button>

    </div>
    </div>
</div>
