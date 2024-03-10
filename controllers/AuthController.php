<?php

namespace app\controllers;

use app\core\Request;
use app\core\Controller;
use app\models\RegisterModel;

class AuthController extends Controller
{

    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $registerModel = new RegisterModel();
        $errors = [];

        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());


            if ($registerModel->validate() && $registerModel->register()) {
                return 'success';
            }


            return $this->render('register', [
                'model' => $registerModel
            ]);
        }

        $this->setlayout('auth');
        return $this->render('register', [
            'errors' => $errors
        ]);
    }
}
