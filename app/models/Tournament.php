<?php


class Tournament
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Insert Tournament fields from
    public function insert($data)
    {
        $this->db->query('INSERT INTO  tournaments (flight_id) VALUES(:flight_id)');

        // Bind values
        $this->db->bind(':flight_id', $data['flight_id']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // Fetch all Tournament records
    public function fetchAll()
    {
        $this->db->query('SELECT * FROM tournaments');
        $tournaments = $this->db->resultSet();
        return $tournaments;
    }
}