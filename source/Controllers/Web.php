<?php
    
    namespace Source\Controllers;
    
    use source\MySql\Connect;

    

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
        echo $this->view->render("themes/_login", [
            "head" => site("name")."Bem-vindo",
        ]);   
    }
}