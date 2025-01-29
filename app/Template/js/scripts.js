// Botões da nav!

youtHub = document.querySelector('#youtHub');
getThumb = document.querySelector('#getThumb');

divDownloadButton = document.querySelector('.downloadButton');
divThumbButton = document.querySelector('.thumbButton')

sectionDownload = document.querySelector('section.downloader');
sectionGetThumb = document.querySelector('section.getThumb');

function updateUrl(newUrl) {
    history.pushState(null, null, newUrl);
  }

  function activePage() {

    url = window.location.pathname;

    
    if(url == "/yout/youtHub") {
        divThumbButton.classList.remove('buttonLink-active');
        sectionGetThumb.style.display = 'none';
        divDownloadButton.classList.add('buttonLink-active');
        sectionDownload.style.display = 'block';
    } else {
        divDownloadButton.classList.remove('buttonLink-active');
        sectionDownload.style.display = 'none';
        divThumbButton.classList.add('buttonLink-active');
        sectionGetThumb.style.display = 'block';
    }
  }

youtHub.addEventListener('click', (e) => {
    e.preventDefault();
    updateUrl('youtHub');
    divThumbButton.classList.remove('buttonLink-active');
    sectionGetThumb.style.display = 'none';
    divDownloadButton.classList.add('buttonLink-active');
    sectionDownload.style.display = 'block';
})


getThumb.addEventListener('click', (e) => {
    updateUrl('getThumb');
    divDownloadButton.classList.remove('buttonLink-active');
    sectionDownload.style.display = 'none';
    divThumbButton.classList.add('buttonLink-active');
    sectionGetThumb.style.display = 'block';
})



/* 

### variaveis */

let link = document.querySelector('#URL');
let buttonMP3 = document.querySelector('#button-mp3');
let buttonMP4 = document.querySelector('#button-mp4');
let submitButton = document.querySelector('#submit');
let message = document.querySelector('.message p')

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


// envio form download 

submit.addEventListener('click', (e) => {
    e.preventDefault();
    alert(link.value)
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
        
        fetch("http://127.0.0.1/youtHub/convert", {
            method: "POST",
            body: JSON.stringify({
                url: link.value,
                type: typeConvert
            }),
            headers: {
                "Content-type": "application/json; charset=UTF-8"
            }
            });

    } else {
        message.style.color = 'red';
        message.innerHTML = "Selecione MP3 ou MP4!";  
        return(1); 
    }
})

//eventos
activePage();