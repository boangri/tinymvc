<?php

namespace core;
/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class route
{
    static function start()
    {
        // контроллер и действие по умолчанию
        $controller_name = 'main';
        $action_name = 'index';

        $uri = explode('?', $_SERVER['REQUEST_URI']);
        $routes = explode('/', $uri[0]);

        // получаем имя контроллера
        if ( !empty($routes[1]) )
        {	
            $controller_name = $routes[1];
        }

        // получаем имя экшена
        if ( !empty($routes[2]) )
        {
            $action_name = $routes[2];
        }

        // добавляем префиксы
        $model_name = 'models\\'.$controller_name;
        $controller_name = 'controllers\\'.$controller_name;
        $action_name = 'action_'.$action_name;

        /*
        echo "Model: $model_name <br>";
        echo "Controller: $controller_name <br>";
        echo "Action: $action_name <br>";
        */

        if (class_exists($controller_name)) {
            $controller = new $controller_name;
            $action = $action_name;
            if(method_exists($controller, $action)){
                $controller->$action();
                return;
            }
        }
        self::ErrorPage404();
    }

    static function ErrorPage404()
    {
        $controller = new p404();
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        $controller->action_index();
    }   
}
