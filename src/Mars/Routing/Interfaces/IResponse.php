<?php


namespace Mars\Core\Routing\Interfaces;


use Mars\Core\Routing\Interfaces\Exceptions\MethodeNotAllowedException;
use Mars\Core\Routing\Interfaces\Exceptions\RouteNotFoundException;

interface IResponse
{

    /**
     * @param string $path
     */
    public function setPath($path = '/');

    /**
     * Add route.
     *
     * @param $uri
     * @param $handler
     * @param array $methods
     */
    public function addRoute($uri, $handler, array $methods = ['GET']);

    /**
     * Get response.
     *
     * @return mixed
     *
     * @throws MethodeNotAllowedException
     * @throws RouteNotFoundException
     */
    public function getResponse();
}