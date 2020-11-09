<?php


class GolferController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing Golfers
     *
     */

    public function index()
    {
        $this->view('pages/golfer/index', ['title' => 'Golfer']);
    }


    /**
     * Show the form for creating a new Golfer.
     *
     */
    public function create()
    {
        //
        return $this->view('pages/golfer/create');

    }

    /**
     * Store a newly created Golfer in storage.
     *
     */
    public function store()
    {

    }

    /**
     * Display the specified Golfer.
     *
     * @param int $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified Golfer.
     *
     * @param int $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified Golfer in storage.
     *
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified Golfer from storage.
     *
     */
    public function destroy($id)
    {
        //
    }
}