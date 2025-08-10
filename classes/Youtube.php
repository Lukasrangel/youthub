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
            $command = "yt-dlp -o 'mp3/%(title)s.%(ext)s' -x --audio-format mp3 " . $link;
            $output = shell_exec($command);
        } catch(Exception $e) {
            echo $e->getMessage();
        }

        $resultado['format'] = 'mp3';
        preg_match('/\[ExtractAudio\] Destination:\s*mp3\/(.*?)\.mp3/', $output, $output_array);
        $file = $output_array[1] . '.mp3';

        $resultado['file'] = $file;

        echo json_encode($resultado);

    }

    public function mp4($link) {

        $link = $this->explode($link);

        try {
            $command = "yt-dlp -o 'mp4/%(title)s.%(ext)s' " . $link;
            $output = shell_exec($command);
        } catch(Exception $e) {
            echo $e->getMessage();
        }

        $resultado['format'] = 'mp4';
        preg_match('/\[Merger\] Merging formats into "mp4\/(.*?)\.mp4"/', $output, $output_array);

        $resultado['file'] = $output_array[2];

        echo json_encode($resultado);
    }
}

?>
