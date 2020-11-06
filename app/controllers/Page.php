<?php


class Page extends Controller
{

    // Get Home route
    public function index()
    {
        $this->view('pages/home', ['title' => 'Home']);
    }

    public function golfer()
    {
        $this->view('pages/golfer/index', ['title' => 'Golfer']);
    }

    public function dashboard()
    {
        $this->view('pages/dashboard/index', ['title' => 'Dashboard']);
    }
}