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

    function randomAns($ans){

        $txt = "";
        if ($ans < 5){
            $ans = 5;
        }

        $lengs = rand(4, $ans);

        for ($i = 0; $i < $lengs; $i++){
            # code... 
            $txt .= rand(0, 8);
        }
        return $txt;

    }