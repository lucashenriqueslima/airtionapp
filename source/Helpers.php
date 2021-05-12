<?php

function site(string $param = null): string
    {
        if($param && !empty(SITE[$param])){
            return SITE[$param];
        }

        return SITE["root"];
    }

    function asset(string $path, $time = true): string
    {
        return SITE['root']."/views/assets/{$path}";
        
/*
        if($time && file_exists($fileOnDir)){
            $file .="?time=".filemtime($fileOnDir);
        }
         
        return $file;
        */
    }

    function level(string $param): string
    {      
            return LEVEL[$param];
    }

    function setFlash($type, $msg){

        if($type == 1){
            $_SESSION["success"] = $msg;
        }

        if($type == 2){
            $_SESSION["error"] = $msg;
        }
       
    }
    function flash(string $type = null, string $message = null): ?string
    {
        if($type && $message){
            $_SESSION["flash"] = [
                "type"=> $type,
                "message"=> $message
            ];
            
            return null;
        }

        if(!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]){
            
            echo '<script>M.toast({
                html: "'.$_SESSION['flash']['message'].'",
                displayLength: 3000,
                classes:"'.$_SESSION['flash']['type'].'"
            })</script>';

            unset($_SESSION['flash']);
        }

        return null;
    }
            


        
    
