<?php 
    error_reporting(E_ERROR);
    $conn = mysqli_connect('localhost', 'me', 'password', 'stoneforest');

    class Table{
        public $name = "";
        public $conn;
        public function __construct($name) {
            $this->name = $name;
            $this->conn = $GLOBALS['conn'];

        }

        public function Insert(...$posts) : bool {
            $post_list = "";
            $values = [];
            $values[] = "'" . $_POST[$posts[0]]. "'";
            unset($posts[0]);
            foreach ($posts as $post) {
                $values[] = ", '" . $_POST[$post]. "'";
            }

            $post_list .= $values[0];
            unset($values[0]);
            foreach ($values as $value) {
                $post_list .= $value;
            }


            $query = "SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME = '$this->name'";
            $result = mysqli_query($this->conn, $query);
            $table_columns = [];

            while ($row = mysqli_fetch_assoc($result)){
                $table_columns[] = $row['COLUMN_NAME'];
            }
            $x = "";
            $x .= ''.$table_columns[1].'';
            
            unset($table_columns[1]);
            unset($table_columns[0]);

            foreach ($table_columns as $table_column) {
                $x .= ', '.$table_column;
           }
            
           echo $x;
            $query = "INSERT INTO $this->name ($x) VALUES ($post_list)";
            echo $query;
            $result = mysqli_query($this->conn, $query);

            return $result;
        }

        public function Update($id, ...$posts) : mysqli_result {
            $query = "SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME = '$this->name'";
            $result = mysqli_query($this->conn, $query);
            $table_columns = [];

            while ($row = mysqli_fetch_assoc($result)){
                $table_columns[] = $row;
            }
            
            $x = "";
            $x .= $table_columns[1] . "=" . '$_POST["'.$posts[0].'"]' ;
            unset($table_columns[1]);
            unset($posts[0]);

            foreach ($posts as $post) {
                foreach ($table_columns as $table_column) {
                    $x .= $table_column . "=" . '$_POST["'.$post.'"]';
                }
            }

            $query = "UPDATE $this->name WHERE $table_columns[0] = $id $x";
            $result = mysqli_query($this->conn, $query);

            return $result;
        }

        public function Delete($id, $id_column) : mysqli_result{
            $query = "DELETE FROM $this->name WHERE  $id_column = $id";
            $result = mysqli_query($this->conn, $query);
            return $result;
        }
        

        public function getColumns($table = null) : string {
            if ($table === null) {
                $table = $this->name;
            }
            $query = "SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME = '$table'";
            $result = mysqli_query($this->conn, $query);
            $table_columns = [];

            while ($row = mysqli_fetch_assoc($result)){
                $table_columns[] = $row['COLUMN_NAME'];
            }
            
        
            $x = "";
            $x .= ''.$table_columns[1].'';
            
            unset($table_columns[1]);
            unset($table_columns[0]);

            foreach ($table_columns as $table_column) {
                $x .= ', '.$table_column;
           }
           
           return $x;
        }
        public function FetchID($search, $column, $table) : int {
            $query = "SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME = '$table'";
            $result = mysqli_query($this->conn, $query);
            $table_columns = [];

            while ($row = mysqli_fetch_assoc($result)){
                $table_columns[] = $row['COLUMN_NAME'];
            }
            $id = $table. '.' .$table_columns[0];

            $val = "'".$search."'";
            $query = "SELECT $id FROM $table WHERE $column = $val";
            // echo $query;
            $result = mysqli_query($this->conn, $query);
            $iden = [];
            while ($row = mysqli_fetch_assoc($result)){
                $iden[] = $row[$table_columns[0]];
            }
            $id = (int) $iden[0];
            // echo $id;
            return $id;
        }


        public function FetchValue(...$posts) : string {
            $post_list = "";
            $values = [];
            $values[] = "'" . $_POST[$posts[0]]. "'";
            unset($posts[0]);
            foreach ($posts as $post) {
                $values[] = ", '" . $_POST[$post]. "'";
            }

            $post_list .= $values[0];
            unset($values[0]);
            foreach ($values as $value) {
                $post_list .= $value;
            }
            return $post_list;
        }
        public function InsertedID($id, ...$forms) : bool {

            
            $x = $this->getColumns();
            $val = $this->FetchValue(...$forms);
            $query = "INSERT INTO $this->name ($x) VALUES ($val, $id)";
            $result = mysqli_query($this->conn, $query);
            // echo $query;
            return $result;
        }

    }

    
    $employee = new Table('employee');
    $employee->getColumns();
    $id = $employee->FetchID($_POST['employee_station'], 'site_name', 'site');
    $employee->Insert('employee_name', 'employee_position', 'employee_certification', 'employee_training_records', 'employee_site');
    
    // $mining_log = new Table('daily_mining_activity');
    // $time = $_POST['mining_log_work_start']. "->". $_POST['mining_log_work_end'];
    // $a = $_POST['mining_log_date'];
    // $b = $_POST['mining_log_amt_extracted_ore'];
    // $c = $_POST['mining_log_safety'];
    // $d = $_POST['mining_log_equipment_used'];
    // $f = $_POST['mining_log_site'];
    // $query = "INSERT INTO daily_mining_activity (DATE, Ore_Extraction_vol, work_hours, equipment_usage, safety_inspection , Site_ID) VALUES ('$a', '$b', '$time', '$d', '$c', '$f')";
    // echo 34;
    // echo $query;
    // $result = mysqli_query($conn, $query);







 
