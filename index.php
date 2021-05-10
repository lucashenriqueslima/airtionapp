
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

$router->post("/administrator/login", "Auth:login_admin", "auth.login_admin");
$router->post("/me/administrator/register", "Auth:register", "auth.register"); 


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
$router->get("/", "WebAdmin:login", "webadmin.login");

/**
* PROFILE ADMINISTRATOR
*/
$router->group("/administrator");
$router->get("/me", "AppAdmin:home", "appadmin.home");
$router->get("/me/usuarios", "appadmin:users", "appadmin.users");
$router->get("/me/registrar", "appadmin:register", "appadmin.register");
$router->get("/me/sair", "AppAdmin:logoff", "appadmin.logoff");

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