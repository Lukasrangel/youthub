<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href=<?php echo DIR . "/app/Template/css/styles.css"?>>
    
    <title>YoutHub</title>
</head>
<body>

    <header>
        <h1 class="title"> YoutHubDownloader </h1>

        <nav>
            <div class="downloadButton buttonLink buttonLink-active">
                <a href="youtHub" onclick="event.preventDefault()" id="youtHub"> Download </a>
            </div>
            
            <div class="thumbButton buttonLink">
                <a href="getThumb" onclick="event.preventDefault()" id="getThumb"> Get Thumbnail </a>
            </div>
            
        </nav>

        <p> Download Youtube Vídeos on MP3 or MP4 And ThumbNails for free! </p>
    </header>

    <section class="adsense">
        <h1> AdSense </h1>

    </section><!--adsense-->
    
    <section class="downloader">

        <form method="POST">

            <h2> Video or MP3 Download</h2>

            <input id='URL' type="text" placeholder="Enter your youtube URL">

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


    <section class="getThumb">

        <form method="POST">

            <h2> ThumbNail </h2>
            <input id='ThumbLink' type="text" placeholder="Enter your youtube URL">


            <br />
            <br />

            
            <div class="submit">
                <input id="getThumbsubmit" type="submit"  value="Get Thumbnail!">
            </div><!--submit-->
        </form>


    </section><!--ThumbNail -->
   


    <footer>

        <p> YoutHubDownloader is a free tool, we are not responsible for copyright infringement</p>

    </footer>
</body>


<script src=<?php echo DIR . "/app/Template/js/scripts.js"?>>
</script>
</html>