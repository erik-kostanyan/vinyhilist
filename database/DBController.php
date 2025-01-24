<?php

class DBController
{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "vinyhilist";

    public $con = null;

    public function __construct()
    {
        // Specify your MySQL port as the fourth parameter in the following line, if you don't run MySQL on port 3306.
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
