<?php
    
    namespace Source\Controllers;


    

    class WebAdmin extends Controller
{
        public function __construct($router)
    {
        parent::__construct($router);
        
       if(!empty($_SESSION["userAdmin"])){
          $this->router->redirect("appadmin.home");
      }
    }

    public function login():void
    {       

        echo $this->view->render("themes/login_admin", [
            "head" => site("name")."Painel Admin    ",
        ]);   
    }
}