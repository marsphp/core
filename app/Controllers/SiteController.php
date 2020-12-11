<?php

namespace App\Controllers;

use Mars\Core\BaseController;
use Mars\Routing\Request;

class SiteController extends BaseController
{

    /**
     *
     *
     * @return false|string|string[]
     */
    public function home()
    {
        $data = ['name' => 'John Doe'];
        return $this->render('home', $data);
    }

    /**
     *
     *
     * @return false|string|string[]
     */
    public function contact()
    {
        return $this->render('contact');
    }


    /**
     *
     *
     * @param Request $request
     */
    public function saveData(Request $request)
    {
        var_dump($request->getBody());
        die();
    }

}