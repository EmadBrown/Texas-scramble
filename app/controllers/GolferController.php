<?php


class GolferController extends Controller
{

    public function __construct()
    {
        $this->golferModel = $this->model('Golfer');
    }

    /**
     * Display a listing Golfers
     *
     */
    public function index()
    {
        $data = ['golfers' => $this->golferModel->fetchAll()];
        $this->view('pages/golfer/index', $data);
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