<?php


class GolferController extends Controller
{

    public function index()
    {
        $this->view('pages/golfer/index', ['title' => 'Golfer']);
    }
}