
<?php

ob_start();

session_start();

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;



$router = new Router(site());

$router->namespace("Source\Controllers");

/**
* WEB
*/
$router->group(null);
$router->get("/", "Web:login", "web.login");
$router->get("/solicitar", "Web:solicitar", "web.solicitar");
$router->get("/recuperar", "Web:forget", "web.forget");
$router->get("/senha/{email}/{forgert}", "Web:reset", "web.reset");


/**
* AUTH
*/
$router->group(null);
$router->post("/login", "Auth:login", "auth.login" );
$router->post("/request", "Auth:request", "auth.request"); 
$router->post("/forget", "Auth:forget", "auth.forget" );
$router->post("/reset", "Auth:reset", "auth.reset" );
$router->post("/administrator/login", "Auth:adminLogin", "auth.adminLogin");


/**
* PROFILE
*/
$router->group("/me");
$router->get("/", "App:home", "app.home");
$router->get("/sair", "App:logoff", "app.logoff");

/**
 * ADMINISTRATOR
 */
$router->group("/administrator");
$router->get("/", "Admin:login", "admin.login");

/**
* PROFILE ADMIN
*/
$router->group("administrator/me");
$router->get("/", "Admin:home", "admin.home");
$router->get("/usuarios", "admin:users", "admin.users");
$router->get("/registrar", "admin:register", "admin.register");

/**
* ERRORS
*/
$router->group("ops");
$router->get("/{errcode}", "Web:error", "web.error");


/**
 * ROUTE PROCESS
 */
$router->dispatch();

/**
 * ERRORS PROCESS
 */
if($router->error()){
    $router->redirect("web.error", ["errcode"=> $router->error()]);
}
ob_end_flush();