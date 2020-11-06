<?php


class Dashboard extends  Controller
{
    public function index()
    {
        $this->view('pages/dashboard/index', ['title' => 'Dashboard']);
    }

}