<?php


namespace Mars\Core\Routing\Http\Http\Interfaces;


use Mars\Core\Routing\Http\Http\Interfaces\Exceptions\MethodeNotAllowedException;
use Mars\Core\Routing\Http\Http\Interfaces\Exceptions\RouteNotFoundException;

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