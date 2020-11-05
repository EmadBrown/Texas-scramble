<?php


class Pages extends Controller
{
    public  function index(){
        $this->view('pages/404.php', ['title' => 'Home']);
    }
}