import yt_dlp
import sys

video_url = sys.argv[1];

def download_video(url):
    ydl_opts = {
        'outtmpl': 'mp4/' + '/%(title)s.%(ext)s',
}
    with yt_dlp.YoutubeDL(ydl_opts) as ydl:
        ydl.download([url])

download_video(video_url)
