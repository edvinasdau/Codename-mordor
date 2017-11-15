<?php

class BannerModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get single post ( [0]'st element from results array)
    public function getAll(): array
    {
        return $this->db->select("SELECT * FROM banners");
    }

    public function getRandom($count = 3): array
     {
        return $this->db->select(" SELECT *, rand() as rand from banners order by rand LIMIT :count", ["count" => $count]);
    }

}
