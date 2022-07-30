<?php

namespace APP\Support\Database;

class Connection
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "bio_site";

    protected $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->database);
        if (!$this->connection) {
            echo "Data base connection faild";
        }
    }
}

class DB extends Connection
{
    public static function Select($command)
    {
        $result = mysqli_query((new self)->connection, $command);
        return $result;
    }

    public static function create($command)
    {
        if (mysqli_query((new self)->connection, $command)) {
            
            return true;
        }

        return false;
    }

    public static function delete($command)
    {
        if (mysqli_query((new self)->connection, $command)) {
            return true;
        }

        return false;
    }

    public static function update($command)
    {
        if (mysqli_query((new self)->connection, $command)) {
            return true;
        }

        return false;
    }

    
}
