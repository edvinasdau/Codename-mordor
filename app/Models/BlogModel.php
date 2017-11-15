<?php

class BlogModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get single post ( [0]'st element from results array)
    public function getAll(): array
    {
       return $this->db->select("SELECT id, title, SUBSTRING(`body`, 1, 100) as body FROM posts");
    }

    public function getSingle($id): array
     {
        return $this->db->select("SELECT * FROM posts WHERE id = :id", ["id" => $id])[0];
    }

    public function search(string $query): array
    {
        return $this->db->select("SELECT * from posts WHERE UPPER(title) LIKE UPPER(?) or UPPER(body) LIKE UPPER(?)" , ["%$query%", "%$query%"]);
    }

}
