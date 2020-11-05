<?php


class Flight
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Insert Flight fields from
    public function insert($data)
    {
        $this->db->query('INSERT INTO flights (golfer_id, num_of_players, type) VALUES(:golfer_id, :num_of_players, :type)');

        // Bind values
        $this->db->bind(':golfer_id', $data['golfer_id']);
        $this->db->bind(':num_of_players', $data['num_of_players']);
        $this->db->bind(':type', $data['type']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

}