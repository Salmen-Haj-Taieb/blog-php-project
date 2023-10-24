<?php
require_once "views/View.php";
class Router
{
    private $ctrl;
    private $view;

    public function routeReq()
    {
        try {
            //chargement automatique du dossier models
            spl_autoload_register(function ($class) {
                require_once ('models/' . $class . '.php');
                
            });
            //on crée une variable $url
            $url = '';
            //on va determiner le controlleur en
            //fonction de la valeur de cette variable
            if (isset($_GET['url'])) {
                $url = explode('/', filter_var($_GET['url']), FILTER_SANITIZE_URL);
                //var_dump($url);
                //on recupere le premier parametre de url
                //on le met tout en miniscule
                //on met sa premiere lettre en majuscule
                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = "Controller" . $controller;
                //on retrouve le chemin du controller voulu
                $controllerFile = "controllers/" . $controllerClass . ".php";
                //on check if the fichier du controller exist
                if (file_exists($controllerFile)) {
                    //on lance la class en question
                    //avec tous les parameteres url
                    //pour respecter l'encapsulation
                    require_once $controllerFile;
                    $this->ctrl = new $controllerClass($url);
                } else {
                    throw new  \Exception("Page not found",1); 
                }
            } else {
                require_once ('controllers/ControllerAccueil.php');
                $this->ctrl = new ControllerAccueil($url);
            }
        } catch (\Exception $e) {
            $errorMsg = $e->getMessage();
            $this->_view = new View('Error');
            $this->_view->generate(array('errorMsg'=>$errorMsg));
            require_once('views/viewErro.php');
        }
    }
}
