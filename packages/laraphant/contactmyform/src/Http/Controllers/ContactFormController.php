<?php

namespace Laraphant\Contactmyform\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

class ContactFormController extends BaseController
{
    public function index()
    {
        return view('contactmyform::index');
    }
}