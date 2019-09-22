<?php
    function cantidad_párrafos($text, $rs="\r?\n") { 
        $texto = $text; 
        $párrafos = preg_split("/(.*?$rs)(?:$rs)+/s", $texto, -1, PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY); 
        return $párrafos; 
    }