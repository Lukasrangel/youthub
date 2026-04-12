
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
            $command = "/var/www/neotube/bin/yt-dlp -o 'mp3/%(title)s.%(ext)s' -x --audio-format mp3 --audio-quality 0 --embed-thumbnail --add-metadata " . escapeshellarg($link);
            $output = shell_exec($command);
        } catch(Exception $e) {
            echo $e->getMessage();
        }

        $resultado['format'] = 'mp3';

        $patterns = [
                '/mp3\/([^"\n]+\.mp3)/',
                '/^\[download\] (.+\.mp3) has already been downloaded/'
        ];

        foreach ($patterns as $pattern) {
                if (preg_match($pattern, $output, $output_array)) {
                        $file = $output_array[1];
                        break;
                }
        }

        if (is_null($file)){
                echo $e->getMessage();
        }

        $resultado['file'] = $file;


        echo json_encode($resultado);

    }

    public function mp4($link) {

        $link = $this->explode($link);

        try {
                $command = "/var/www/neotube/bin/yt-dlp -f 'bv*+ba/b' --merge-output-format mp4 -o 'mp4/%(title)s.%(ext)s' --embed-thumbnail " . escapeshellarg($link);
                $output = shell_exec($command);
        } catch(Exception $e) {
                echo $e->getMessage();
        }

        $resultado['format'] = 'mp4';

        $patterns = [
                '/Merging formats into "mp4\/([^"]+)"/',
                '/^\[download\] (.+\.mp4) has already been downloaded/'
        ];


        foreach ($patterns as $pattern) {
                if (preg_match($pattern, $output, $output_array)) {
                        $file = $output_array[1];
                        break;
                }
        }

        if (is_null($file)){
                echo $e->getMessage();
        }

       $resultado['file'] = $file;

       echo json_encode($resultado);
       }
}

?>
