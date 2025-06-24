<?php
class Router
{
    private $routes = [];

    public function get($pattern, $callback)
    {

        $this->routes['GET'][$pattern] = $callback;
    }

    public function post($pattern, $callback)
    {
        $this->routes['POST'][$pattern] = $callback;
    }

    public function delete($pattern, $callback)
    {
        $this->routes['DELETE'][$pattern] = $callback;
    }

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // 🧠 Detecta dinámicamente el subdirectorio base
        $scriptName = dirname($_SERVER['SCRIPT_NAME']); // Ej: /Portfolio o /
        $basePath = rtrim($scriptName, '/');

        // Elimina el basePath si está presente
        if ($basePath && strpos($uri, $basePath) === 0) {
            $uri = substr($uri, strlen($basePath));
        }

        // Asegura que la URI no esté vacía
        $uri = $uri ?: '/';

        // Método DELETE simulado por POST
        if ($method === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
            $method = 'DELETE';
        }

        if (isset($this->routes[$method])) {
            foreach ($this->routes[$method] as $pattern => $callback) {
                if (preg_match('#^' . $pattern . '$#', $uri, $matches)) {
                    array_shift($matches);
                    $this->executeCallback($callback, $matches);
                    return;
                }
            }
        }

        http_response_code(404);
        echo "404 - Página no encontrada";
    }

    private function executeCallback($callback, $params = [])
    {
        if (is_string($callback) && strpos($callback, '@') !== false) {
            list($controller, $method) = explode('@', $callback);
            $controllerInstance = new $controller();
            call_user_func_array([$controllerInstance, $method], $params);
        }
    }
}
