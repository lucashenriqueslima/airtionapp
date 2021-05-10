<?php 

    namespace Source\Controllers;
    use Source\Models\User;
    
    class App extends Controller
    {

        protected $user;

        public function __construct($router)
        {
            parent::__construct($router);

            if(empty($_SESSION["user"]) || !$this->user = (new User())-> find($_SESSION["user"])){
                session_destroy();

                flash("red", "Acesso negado, faça login para entrar :-)");
                $this->router->redirect("web.login");
            }

         
        }

        public function home(): void
        {       
            echo $this->view->render("themes/dashboard", [
                "head"=> site("name")."Home",
                "user"=> $this->user
                ]);
        }

        public function logoff(): void
        {
            session_destroy();     
            flash("blue darken-3", "Sessão encerrada, volte sempre {$this->user->first_name}  :-)");
            $this->router->redirect("web.login");
        }
    




    }