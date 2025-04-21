<!DOCTYPE html>
<html lang="en">
<head>
    <title>YoutHub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Youtube mp3 & mp4 Downloader and ThumbNail Downloader!">
    <meta name="keywords" content="youtube downloader, youtube mp3, youtube converter, donwload youtube videos, youtHub, thumbnail downloader">
    <meta name="author" content="Revolta Cyb3rnetic4">
    <meta name="robots" content="index">

    <link rel="stylesheet" type="text/css" href=<?php echo DIR . "/app/Template/css/styles.css"?>>
    <link rel="shortcut icon" href="youthub.ico" />
    
    
</head>
<body>

    <header>
        <h1 style='margin-bottom:98px' class="title"> YoutHubDownloader </h1>

        

        <p> Download Youtube Vídeos on MP3 or MP4 And ThumbNails for free! </p>
    </header>

    
    <div class="content-banner-pos hidden">


    </div><!--content-banner-pos-->

    <section class="adsense">
        <h1> AdSense </h1>

    </section><!--adsense-->
    
    <section class="downloader">

        <form method="POST" action='convert'>

            <h2> Video or MP3 Download</h2>

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
                    <input id="submit" type="submit"  value="Converter!">
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