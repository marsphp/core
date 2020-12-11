<?php

namespace Mars\Core;
use Mars\Core\Routing\Request;
use Mars\Core\Routing\Response;
use Mars\Core\Routing\Router;

/**
 * Class Core
 *
 * @author Hassane Dao <dao.hassane@gmail.com>
 * @author Houssene Dao <dao.houssene@gmail.com>
 *
 * @package Mars\Core
 */
class Core
{
    public static string $ROOT_DIR;

    /**
     * @var Router
     */
    public Router $router;

    /**
     * @var Request
     */
    public Request $request;

    /**
     * @var Response
     */
    public Response $response;

    /**
     * @var Core
     */
    public static Core $core;

    /**
     * Core constructor.
     *
     * @param $rootPath
     */
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$core = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}