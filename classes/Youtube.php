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
            $command = "python bin/mp3.py " . $link; 
            $output = shell_exec($command);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        
        $resultado['format'] = 'mp3';
        preg_match('/FixupM4a(.*)m4a/', $output, $output_array);
        $file = explode('//',$output_array[0])[1];

        $resultado['file'] = $file;
        
        echo json_encode($resultado);
        
    }

    public function mp4($link) {
        
        $link = $this->explode($link);
        
        try {
            $command = "python bin/mp4.py " . $link; 
            $output = shell_exec($command);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        
        $resultado['format'] = 'mp4';
        preg_match('/Merger(.*)"mp4\/\/(.*)"/', $output, $output_array);
        
        $resultado['file'] = $output_array[2];

        echo json_encode($resultado);


    }


}

?>