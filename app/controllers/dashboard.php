<?php

class Dashboard extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        if(!$this->user) redirect('login');
    }

    function index()
    {
        die('dashboard index');
    }
}