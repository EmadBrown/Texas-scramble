<?php


class MainController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->view('pages/home', ['title' => 'Home']);
    }

}
