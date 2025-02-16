<?php

namespace classes;

class Youtube {

    private $url;

    public function setUrl($url) {
        $this->$url = $url;
    }

    public function mp3($link) {

        echo $link;
        try {
            $command = "python bin/mp3.py" . $this->url; 
            $output = shell_exec($command);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        
        $resultado['format'] = 'mp3';
        preg_match('/ExtractAudio(.*)mp3/', $output, $output_array);
        $file = explode('//',$output_array[0])[1];

        $resultado['file'] = $file;
        
        echo json_encode($resultado);
    }

    public function mp4($link) {
        
        try {
            $command = "python bin/mp4.py" . $this->url; 
            $output = shell_exec($command);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        
        echo $output;
        echo "[FORMATO] => MP4";
        preg_match('/[ExtractAudio](.*)mp3/', $output, $output_array);
        $file = explode('//',$output_array[0])[1];
        echo $file;


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