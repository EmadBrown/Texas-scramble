<?php


class TournamentController extends Controller
{

    public function __construct()
    {

    }


    /**
     * Display a listing Tournaments
     *
     */

    public function index()
    {
        $this->view('pages/tournament/index', ['title' => 'Tournament']);
    }


    /**
     * Show the form for creating a new Tournament.
     *
     */
    public function create()
    {
        //
        return $this->view('pages/tournament/create');

    }

    /**
     * Store a newly created Tournament in storage.
     *
     */
    public function store()
    {

    }

    /**
     * Display the specified Tournament.
     *
     * @param int $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified Tournament.
     *
     * @param int $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified Tournament in storage.
     *
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified Tournament from storage.
     *
     */
    public function destroy($id)
    {
        //
    }
}