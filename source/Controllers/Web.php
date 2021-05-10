<?php
    
    namespace Source\Controllers;
        
    class Web extends Controller
{
        public function __construct($router)
    {
        parent::__construct($router);
        
       if(!empty($_SESSION["user"])){
          $this->router->redirect("app.home");
      }
    }

        public function login():void
    {       

        

        echo $this->view->render("themes/login", [
            "head" => site("name")."Bem-vindo",
        ]);   
    }

    public function forget(): void
    {
        echo $this->view->render("themes/forget", [
            "head" => site("name")."Recuperar senha",
            ]);
    }

}