<?php 

    namespace Source\Controllers;
    use Source\Models\User;
    
    class AppAdmin extends Controller
    {

        protected $userAdmin;

        public function __construct($router)
        {
            parent::__construct($router);            

            $l = 2;

            if(empty($_SESSION["userAdmin"]) || !$this->userAdmin = (new User())->find("id = :i AND level = :l" , "i={$_SESSION["userAdmin"]}&l={$l}")->fetch()){
                session_destroy();

                flash("red", "Acesso negado, faça login para entrar :-)");
                $this->router->redirect("webadmin.login");
            } 

         
        }

        public function home()
        {
            echo $this->view->render("themes/dashboard_admin", [
                "head"=> site("name")."Home",
                "background"=> 'url("../images/bkg.jpg");'
          
                ]);
        }

        public function logoff(): void
        {
            session_destroy();     
            flash("blue darken-3", "Sessão encerrada, volte sempre {$this->user->first_name}  :-)");
            $this->router->redirect("webadmin.login");
        }

        public function register()
        {
            echo $this->view->render("themes/register_admin", [
                "head"=> site("name")."Registrar Usuário",
          
                ]);
        }

    }