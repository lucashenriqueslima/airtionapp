<?php

    namespace Source\Controllers;

    use Source\Models\User; 

    class Auth extends Controller
    {
        public function __construct($router)
        {
            parent::__construct($router);
        }
    
        public function login ($data): void
        {
            $login = $data["email"];
            $passwd = filter_var($data["passwd"]);
         
            setFlash("1", "aasdadadad");
            

            if(!$passwd){
                echo $this->ajaxResponse();
                setFlash("red", "a");
                return;
            }

            
            $userEmail = (new User())->find("email = :e" , "e={$login}")->fetch();
            $userCPF = (new User())->find("cpf = :c" , "c={$login}")->fetch();
           


            if ($userEmail && password_verify($passwd, $userEmail->passwd)) {
                echo $this->ajaxResponse("redirect", ["url" => $this->router->route("app.home")]);
                $_SESSION["user"] = $userEmail->id;
            } elseif ($userCPF && password_verify($passwd, $userCPF->passwd)) {
                echo $this->ajaxResponse("redirect", ["url" => $this->router->route("app.home")]);
                $_SESSION["user"] = $userCPF->id;
            } else {
                echo $this->ajaxResponse();
                setFlash("2", "23123asfafasfasdfg");
                return;
                
            }
          
            return;
                
        }
    
    }