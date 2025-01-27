<?php

namespace classes;

class Youtube {

    private $url;

    public function setUrl($url) {
        $this->$url = $url;
    }

    public function mp3() {
        $command = "python " . DIR . "/bin/mp3.py" . escapeshellarg($this->url);

        exec($command, $output, $status);

        if ($status === 0) {
            echo "OK!";
        } else {
            echo "Fail!";
        }
    }

    public function mp4() {
        $command = "python " . DIR . "/bin/mp4.py" . escapeshellarg($this->url);

        exec($command, $output, $status);

        if ($status === 0) {
            echo "OK!";
        } else {
            echo "Fail!";
        }
    }


    public function getThumb() {
        $command = "yt-dlp -o thumbs/" . uniqid() . " " . escapeshellarg($this->url) . " --write-thumbnail --skip-download";
        
        exec($command, $output, $status);
       
        if ($status === 0) {
            echo "OK!";
        } else {
            echo "Fail!";
        }
    }


}

?>