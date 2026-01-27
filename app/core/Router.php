<?php

namespace App\Core;

class Router 
{

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($method === 'GET' && $uri == '/students') {
           require_once './app/controllers/StudentController.php';
            return;
            }
          if ($method === 'GET' && $uri == '/students/create') {
            
            return;
            }
            
    }

        


}