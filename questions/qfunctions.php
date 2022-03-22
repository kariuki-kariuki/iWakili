<?php
    function randomId($leng){

        $text = "";
        if ($leng < 5){
            $leng = 5;
        }

        $len = rand(4, $leng);

        for ($i = 0; $i < $len; $i++){
            # code... 
            $text .= rand(0, 7);
        }
        return $text;

    }