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

    function setFlash($type, $msg){

        if($type == 1){
            $_SESSION["success"] = $msg;
        }

        if($type == 2){
            $_SESSION["error"] = $msg;
        }
       
    }
        function flash()
        {

            if(isset($_SESSION['error'])){

             
         

                echo '<script>$(window).on("load", function(){
                M.toast({
                    html: "'.$_SESSION['error'].'",
                    displayLength: 2000,
                    classes:"red"
                })  });</script>';

                  unset($_SESSION['error']);
               

            }elseif(isset($_SESSION['success'])){

                echo '<script>M.toast({
                    html: "'.$_SESSION['success'].'",
                    displayLength: 2500,
                    classes:"light-green darken-2"
                  
                })</script>';

                unset($_SESSION['success']);

            }
            
        }

        
    
