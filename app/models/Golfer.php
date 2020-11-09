<?php


class Golfer extends Controller
{
    private $db;
    private $golfer;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Insert Golfer fields from
    public function insert($golfer)
    {
        if (is_a($golfer, 'GolferServices')) {

            $this->golfer = $golfer;

            $this->db->query('INSERT INTO  golfers (name, handicap, gender) VALUES(:name, :handicap, :gender)');

            // Bind values
            $this->db->bind(':name',  $this->golfer->getName());
            $this->db->bind(':handicap', $this->golfer->getHandicap());
            $this->db->bind(':gender', $this->golfer->getGender());

            // Execute
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

    // Fetch all Golfers records
    public function fetchAll()
    {
        $this->db->query('SELECT * FROM golfers');
        $golfers = $this->db->resultSet();
        return $golfers;
    }


}