<?php


class TournamentController extends Controller
{
    public function index()
    {
        $this->view('pages/tournament/index', ['title' => 'Tournament']);
    }
}