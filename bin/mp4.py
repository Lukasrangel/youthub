import yt_dlp
import sys

video_url = sys.argv[1];

def download_video(url):
    ydl_opts = {
        'format': 'bestvideo[ext=mp4]+bestaudio[ext=m4a]/best[ext=mp4]/best',
        'noplaylist': True,
        'nocheckcertificate': True,
        'external_downloader': 'aria2c',  # Usar o aria2c como downloader externo
        'external_downloader_args': ['-x', '16', '-k', '1M'],
        'outtmpl': 'mp4/' + '/%(title)s.%(ext)s',
}
    with yt_dlp.YoutubeDL(ydl_opts) as ydl:
        ydl.download([url])

download_video(video_url)
