<?php

namespace app\controllers;

use app\models\UsersModel;

class IndexController extends BaseController
{
    protected UsersModel $_users;

    public function __construct() {
        parent::__construct();
        $this->_users = new UsersModel();
    }

    public function index()
    {
        $users = $this->_users->getUsers();
        $this->render('index', [
            'title' => 'Добре дошли',
            'users' => $users,
        ]);
    }
}