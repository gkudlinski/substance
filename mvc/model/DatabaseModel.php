<?php
namespace mvc\model;

abstract class DatabaseModel{
    public $db;
    public function __construct()
    {
        $this->db= new \mysqli('localhost', 'root', 'root', 'substance');
    }
}