<?php

namespace app\controllers;

class TranslateController extends BaseController
{

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
       echo 1;
       $this->test();
    }
}