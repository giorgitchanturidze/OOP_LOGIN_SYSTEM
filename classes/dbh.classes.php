<?php

class Dbh
{
    protected function connect()
    {
        try {
            $username = "root";
            $password = "Groot_09";
            $dbh = new PDO('mysql:host=localhost; dbname=ooplogin', $username, $password);
            return $dbh;
        } catch (\Throwable $e) {
            print "Error!: " . $e->getMessage() . "<br>";
            die();
        }
    }
}