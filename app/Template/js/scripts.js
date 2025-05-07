$(document).ready(function() {



});

// Botões da nav!

DIR = 'http://127.0.0.1/yout/';

youtHub = document.querySelector('#youtHub');
getThumb = document.querySelector('#getThumb');

divDownloadButton = document.querySelector('.downloadButton');
divThumbButton = document.querySelector('.thumbButton')

sectionDownload = document.querySelector('section.downloader');
sectionGetThumb = document.querySelector('section.getThumb');


/* variaveis */

let link = document.querySelector('#URL');
let buttonMP3 = document.querySelector('#button-mp3');
let buttonMP4 = document.querySelector('#button-mp4');
let submitButton = document.querySelector('#submit');
let submitThumb = document.querySelector('#getThumbsubmit');
let ThumbLink = document.querySelector('#ThumbLink');
let message = document.querySelector('.message p');



// Botões da página de download mp3 mp3 estilo!

buttonMP3.addEventListener('click', (e) => {
    e.preventDefault();
    buttonMP4.classList.remove('active');
    buttonMP3.classList.add('active');
    
})

buttonMP4.addEventListener('click', (e) => {
    e.preventDefault();
    buttonMP3.classList.remove('active');
    buttonMP4.classList.add('active');
    
})


//carrega banner pos

function bannerPix(format, file) {


    $.ajax({
        method: 'GET',
        url: 'banner',
        success: (layout) => {
         
            $('.content-banner-pos').removeClass('hidden');
            $('.content-banner-pos').html(layout);
            $('.overflow').removeClass('hidden'); 
            
            $('#downloadYourFile').html("<a href='" + format + "/" + file + "' download onclick='location.reload()'> Download your file </a>")

            $('#URL').html('');
        }
    })

}

// envio form download 
submit.addEventListener('click', (e) => {
    e.preventDefault();
    
    if(link.value == ''){
        message.style.color = 'red';
        message.innerHTML = "Insira um link do youtube!";  
        return(1); 
    }
    
    
    
    if(buttonMP3.classList.contains('active') || buttonMP4.classList.contains('active')){

        if(buttonMP3.classList.contains('active')){
            typeConvert = 'mp3';
        } else {
            typeConvert = 'mp4';
           
        }

        message.innerHTML = "";

        parametros = {
            format: typeConvert,
            url: link.value
          };
          
        
        $.ajax({
            method: "POST",
            url: "convert",
            data: { url: link.value, format: typeConvert },
            beforeSend: () => {
                $('.overflow').removeClass('hidden');
                $('.spinner-div').removeClass('hidden');

                setTimeout(function() {
                    $('.message-downloader').html('Just a little more...')
                }, 60000); 

                setTimeout(function() {
                    $('.message-downloader').html('Your video is almost ready...')
                }, 100000); 

            },
            success: (data) => {
                //$('.overflow').addClass('hidden');
                $('.spinner-div').addClass('hidden');

                response = $.parseJSON(data)
                console.log(response.format)
                console.log(response.file)


                bannerPix(response.format, response.file );

                $('#URL').value = '';
                
            },
            error: () => {
                alert('Ocorreu algum erro, tente novamente');
                window.location.reload(true);
            }
        })

        

    } else {
        message.style.color = 'red';
        message.innerHTML = "Selecione MP3 ou MP4!";  
        return(1); 
    }
})






