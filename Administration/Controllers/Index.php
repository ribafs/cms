<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;

class Index extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        global $connexion;
        $cx = $connexion->getCx();
        $modelUser = new \Application\Models\User($cx);
        $user = $modelUser->findById($_SESSION['User']['id']);
        $this->addDataView(array("viewTitle" => "Admin", "user" => $user[0]));
    }

}
