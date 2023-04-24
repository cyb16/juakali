<?php

class Model
{
    /**
     * Table name for the model
     *
     * @var string
     */
    private $table_name;

    /**
     * The array contains the values for the table model
     * @var array
     */
    private $q_values = [];

    /**
     * The connection link for the database
     *
     * @var DB|mysqli
     */
    private $connection;

    /**
     * Assigns the table name
     *
     * Model constructor.
     * @param $table_name
     */
    public function __construct($table_name){
        $this->table_name = $table_name;
        $this->connection = DB::getInstance();
    }

    /**
     * Private function to perform query
     *
     * @param $query
     * @return boolean
     */
    private function query($query){
      if(!mysqli_query($this->connection, $query)){
          trigger_error("Failed due to execute query due to " . mysqli_error($this->connection));
          return false;
      }else{
          return true;
      }
    }

    /**
     * Mutator for the table
     *
     * @param $table_field
     * @param $value
     */
    function __set($table_field, $value){
        $this->q_values[$table_field] = $value;
    }

    /**
     * Creates the INSERT query string
     *
     * @return string
     */
    private function insert(){
        // INSERT QUERY
        if(count($this->q_values) > 0){$query = "INSERT INTO " . $this->table_name . " (";
            $query .=  implode(", ", array_keys($this->q_values));
            $query .= ") VALUES (";

            // Adding single quotes to all values in the array
            $qData = ($this->q_values);
            $qKeys = array_keys($this->q_values);
            for($i = 0; $i < count($qKeys); $i++){
                if($qData[$qKeys[$i]] != 'NOW()')
                    $qData[$qKeys[$i]] = "'". mysqli_real_escape_string($this->connection,$qData[$qKeys[$i]]) ."'";
            }

            $query .= implode(", ", $qData);
            $query .= ")";

            return $query;
        }else{
            trigger_error("You can not INSERT to " . $this->table_name);
        }

    }

    /**
     * Executes the query, as of now, the INSERT query
     *
     * @return boolean
     */
    public function save(){
        return $this->query($this->insert());
    }

    public function view(){
        echo "<pre>";
            print_r($this->q_values);
            print_r(array_keys($this->q_values));
        echo "</pre>";

        $wb = implode(", ", array_keys($this->q_values));
    }


}
