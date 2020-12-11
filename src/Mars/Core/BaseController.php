<?php


namespace Mars\Core;

/**
 * Class Controllers
 *
 * @package Mars\Core
 */
class BaseController
{
    /**
     * @param $view
     * @param array $params
     * @return false|string|string[]
     */
    public function render($view, $params = [])
    {
        return Core::$core->router->renderView($view, $params);
    }
}