<?php
namespace MyApp\Controllers;
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
        echo "<h1>Hello!</h1>";
    }

    public function testAction()
    {
    	echo "test";
    	print_r($_HERDER);
    }

}