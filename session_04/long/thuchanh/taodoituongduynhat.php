<?php
class Application {
    private static $instance;

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Application();
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance();
$app2 = Application::getInstance();

var_dump($app1);


class Application
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo 'alo';
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance();
$app2 = Application::getInstance();
$app3 = new Application(); //Error