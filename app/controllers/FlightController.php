<?php


class FlightController extends  Controller
{

    public function index()
    {
        $this->view('pages/flight/index', ['title' => 'Flight']);
    }
}