<?php
require_once "views/View.php";
class ControllerSignInReader
{

    private $_articleManager;
    private $_authorManager;
    private $_view;

    public function __construct($url)
    {
        if (isset($url) && count($url) < 1) {
            throw new \Exception("Page introuvable", 1);

        } 
        else {
            $this->executeForm();
        }
    }

    private function executeForm()
    {
        $this->_view = new View("SignInReader");
        $this->_view->generateSignInReader(
            array(
            )
        );
    }

   


}