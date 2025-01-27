import yt_dlp
import sys

video_url = sys.argv[1]  
save_path = 'mp3/' 
def download_best_audio_as_mp3(video_url, save_path=save_path):
    ydl_opts = {
        'outtmpl': save_path + '/%(title)s.%(ext)s',  # Save path and file name
        'postprocessors': [{  # Post-process to convert to MP3
            'key': 'FFmpegExtractAudio',
            'preferredcodec': 'mp3',  # Convert to mp3
            'preferredquality': '0',  # '0' means best quality, auto-determined by source
        }],
    }
    with yt_dlp.YoutubeDL(ydl_opts) as ydl:
        ydl.download(video_url)

download_best_audio_as_mp3(video_url)