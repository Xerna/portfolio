<?php

class MainController
{
    // Mostrar la vista principal
    public function index()
    {
        // Simular la obtención de datos de usuarios
        $projects = [
            ['id' => 1, 'name' => 'Project A'],
            ['id' => 2, 'name' => 'Project B'],
            ['id' => 3, 'name' => 'Project C'],
        ];



        $this->loadView('index', ['projects' => $projects]);
    }

    private function loadView($view, $data = [])
    {
        extract($data);
        require_once "views/{$view}.php";
    }
}
