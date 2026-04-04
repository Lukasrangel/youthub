<?php

namespace classes;

class Youtube {


    private function explode($link) {
        $url = explode('&',$link);
        return $url[0];
    }


    public function mp3($link) {

        $link = $this->explode($link);

        try {
            $command = "/var/www/html/yout/bin/yt-dlp -o 'mp3/%(title)s.%(ext)s' -x --audio-format mp3 --audio-quality 0 " . escapeshellarg($link);
            $output = shell_exec($command);
        } catch(Exception $e) {
            echo $e->getMessage();
        }

        $resultado['format'] = 'mp3';

        if (preg_match('/mp3\/([^"\n]+\.mp3)/', $output, $output_array)) {
                $file = $output_array[1];
        } else {
                $e->getMessage();
        }
        

        $resultado['file'] = $file;

        echo json_encode($resultado);

    }

    public function mp4($link) {

        $link = $this->explode($link);

        try {
                $command = "/var/www/html/yout/bin/yt-dlp -f 'bestvideo[height=1080]+bestaudio' --merge-output-format mp4 -o 'mp4/%(title)s.%(ext)s' " . escapeshellarg($link);
                $output = shell_exec($command);
        } catch(Exception $e) {
                echo $e->getMessage();
        }

        $resultado['format'] = 'mp4';

        if (preg_match('/mp4\/([^"\n]+\.mp4)/', $output, $output_array)) {
                $resultado['file'] = $output_array[1];
        } else {
                echo $e->getMessage();
        }

        echo json_encode($resultado);
        }
}

?>
