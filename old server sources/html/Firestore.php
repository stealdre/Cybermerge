<?php

require_once 'vendor/autoload.php';

use Kreait\Firebase;
use Google\Cloud\Firestore;


class database
{
    protected $db;
    protected $name;


    public function __construct($collection, $factory)
    {
        $firestore = $factory->createFirestore();
        $this->db = $firestore->database();

        $this->name = $collection;
    }

    public function getNews()
    {
        $newsRef = $this->db->collection($this->name);

       return $newsRef->documents();
    }
}