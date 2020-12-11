<?php


namespace Mars\src;

/**
 * Class Controllers
 *
 * @package Mars\Core
 */
class Controller
{
    /**
     * @param $view
     * @return false|string|string[]
     */
    public function render($view)
    {
        return Core::$core->router->renderView($view);
    }
}