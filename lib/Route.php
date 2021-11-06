<?php

namespace NetherMC\ApiServer;

/**
 * @author NetherMC
 */
class Route
{

    /**
     * An array of all routes
     * @var array
     * @see Route::getRoutes()
     */
    private $routes = [];

    /**
     * @var Context
     */
    private $context;

    public function __construct()
    {
        $this->context = new Context();
    }

    /**
     * @param string $route         the route URL
     * @param string|array $methods a list of methods that can be used with the route
     * @param callable $callback    a function used to handle the request
     * @return string
     */
    private function route(string $route, string $methods, callable $callback): string
    {
        header('Content-Type: text/plain');
        array_push($this->routes, ['route' => $route, 'methods' => $methods]);

        $uri = $_SERVER['REQUEST_URI'];
        if ($uri === $route) {
            $returnType = gettype($callback($this->context));

            if ($returnType === 'array') {
                header('Content-Type: application/json');
                return json_encode($callback($this->context));
            } else if ($returnType === 'boolean') {
                return $callback($this->context) === true ? 'true' : 'false';
            } else {
                return $callback($this->context);
            }
        } else {
            http_response_code(404);
            header('Content-Type: application/json');
            return json_encode(['error' => 'Not Found', 'status' => 404]);
        }
    }

    /**
     * Create a GET route.
     * @param string $route      the route URL
     * @param callable $callback a function used to handle the request
     * @return void              nothing, "echo" it's used
     */
    public static function get(string $route, callable $callback)
    {
        echo (new self)->route($route, 'GET', $callback);
    }

    /**
     * Create a POST route.
     * @param string $route      the route URL
     * @param callable $callback a function used to handle the request
     * @return void              nothing, "echo" it's used
     */
    public static function post(string $route, callable $callback)
    {
        echo (new self)->route($route, 'POST', $callback);
    }

    /**
     * @return array an array of all routes registered
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

}