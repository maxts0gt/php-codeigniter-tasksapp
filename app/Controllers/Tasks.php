<?php

namespace App\Controllers;

class Tasks extends BaseController
{
    public function index()
    {

        echo view("Tasks/index");
    }
}
