<?php

namespace App\Controllers;

use Mars\Core\Controller;
use Mars\Core\Request;

class SiteController extends Controller
{

    /**
     * @return false|string|string[]
     */
    public function home()
    {
        return $this->render('home');
    }

    /**
     * @return false|string|string[]
     */
    public function contact()
    {
        return $this->render('contact');
    }

    /**
     * @param Request $request
     */
    public function saveData(Request $request)
    {
        var_dump($request->getBody());
        die();
    }

}