<?php

class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
     

    public function view($view,$data= [])
    {
        if(file_exists('../app/views/' .$view. '.php'))
        {
            require_once '../app/views/' . $view . '.php';
        }else
        {
            header('Location: ../public/ErrorPage.php?view='.$view.'');
        }
        

    }

    public static function renderTemplate($template, $args = [])
    {
        static $twig = null;

        if ($twig === null) {
            $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '\views');
            $twig = new \Twig\Environment($loader);
        }

        echo $twig->render($template, $args);
    }
}