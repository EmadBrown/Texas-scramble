<?php


class FlightController extends  Controller
{

    public function __construct(){
        $this->flightModel = $this->model('Flight');
    }

    /**
     * Display a listing Flights
     *
     */
    public function index()
    {
        $data = ['flights' => $this->flightModel->fetchAll()];
        $this->view('pages/flight/index',  $data );
    }


    /**
     * Show the form for creating a new Flight.
     *
     */
    public function create()
    {
        //
        return $this->view('pages/flight/create');

    }

    /**
     * Store a newly created Flight in storage.
     *
     */
    public function store()
    {

    }

    /**
     * Display the specified Flight.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified Flight.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified Flight in storage.
     *
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified Flight from storage.
     *
     */
    public function destroy($id)
    {
        //
    }
}