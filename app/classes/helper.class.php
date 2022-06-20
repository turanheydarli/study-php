<?php

class  Helper{
    public static function Load(){
        $helperDir = realpath('.').'/app/helper';
        if($dh = opendir($helperDir)){
            while ($fileName = readdir($dh)){
                if(is_file($helperDir. '/' . $fileName)){
                    require  $helperDir. '/' . $fileName;
                }
            }
        }
    }
}
