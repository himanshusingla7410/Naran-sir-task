<?php

namespace core;
use PDO;

class Database{
    public $connection; // connection is instance property like variable which can be directly use in anywhere in class by syntax $this->connection
    public $statement;

    public function __construct($config, $username = 'root', $password= 'py2024')
    {
    
        $dsn = 'mysql:'. http_build_query($config, '', ';');

        //$dsn = "mysql:host=localhost;port=3306;dbname=php;user=root;charset=utf8";

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($query, $params=[]){
        // sql query
        $this->statement= $this->connection-> prepare($query);

        // sql executed the query
        $this->statement -> execute($params);

        return $this; 
    }


    public function find(){

        return $this->statement->fetch();

    }


    public function FindOrAbort(){

        $result = $this->find();

        if (! $result){
            abort();
        }

        return $result;
    }


    public function get(){

        $result = $this->statement->Fetchall();

        // if (! $result){
        //     abort();
        // }

        return $result;
    }


}