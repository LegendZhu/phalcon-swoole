<?php
namespace SmvcApp\Controllers;
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
        echo "<h1>Hello!</h1>";
    }

}