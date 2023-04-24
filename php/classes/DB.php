<?php
/*
 * Database class
 */

// Details for linking to the database
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_DATABASE", "moon_db");
define("DB_PASSWORD", "");


class DB
{

    /**
     * The connection link for the Database
     *
     * @var DB|mysqli
     */
    private static $connection;

    // prevents class from being instantiated again
    private static function createInstance(){
        // Magic code
        $connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if(!($connection)){
            self::$connection = null;
            die("Failed to connect to database due to: " . $connection->error);
        }else{
            self::$connection = $connection;
        }

    }

    /**
     * Creates the first instance for making the mysqli connection
     *
     * @return DB|mysqli
     */
    public static function getInstance(){
        if(self::$connection == null){
           self::createInstance();
        }
        return self::$connection;
    }

    private function __clone(){
      // To prevent creation of object by cloning
    }

    /**
     * Closing the connection
     */
    public static function close(){
        mysqli_close(self::$connection);
    }

}
