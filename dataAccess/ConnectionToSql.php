<?php

abstract class ConnectionToSql
{
    //----------------- Data Base Settings ---------------------
    private string $server    = 'localhost';
    private string $database  = 'your database';
    private string $user      = 'your username';
    private string $password  = 'your password';
    //----------------------------------------------------------

    public function GetConnection(): PDO|string
    {
        try
        {
            return new PDO("mysql:host=$this->server;dbname=$this->database;", $this->user, $this->password);
        }catch(PDOException $exception)
        {
            return 'Error: ' . $exception->getMessage();
        }
    }
}