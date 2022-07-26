<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'eborrow_yru');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($firstname, $lastname, $email, $phonenumber,	$address) {
            $result = mysqli_query($this->dbcon, "INSERT INTO tblusers(firstname, lastname, email, phonenumber, address) VALUES('$firstname', '$lastname', '$email', '$phonenumber', '$address')");
            return $result;
            
        }
        public function insert2($name_equ, $total_equ) {
        $result = mysqli_query($this->dbcon, "INSERT INTO tblequipment(name_equ,total_equ) VALUES('$name_equ', '$total_equ')");
        return $result;
        }
        public function insert3($eb_name, $name_equ) {
            $result = mysqli_query($this->dbcon, "INSERT INTO tbl_eborrow(eb_name,name_equ) VALUES('$eb_name', '$name_equ')");
            return $result;
            }
        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblusers");
            return $result;
        }
        public function fetchdata2() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblequipment");
            return $result;
        }
        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblusers WHERE id = '$userid'");
            return $result;
        }
        public function fetchonerecord2($equ_id) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblequipment WHERE equ_id = '$equ_id'");
            return $result;
        }
        public function update($firstname, $lastname, $email, $phonenumber,	$address, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE tblusers SET 
                firstname = '$firstname',
                lastname = '$lastname',
                email = '$email',
                phonenumber = '$phonenumber',
                address = '$address'
                WHERE id = '$userid'
            ");
            return $result;
        }
        public function update2($name_equ, $total_equ, $equ_id) {
            $result = mysqli_query($this->dbcon, "UPDATE tblequipment SET 
                name_equ = '$name_equ',
                total_equ = '$total_equ'
                WHERE equ_id = '$equ_id'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tblusers WHERE id = '$userid'");
            return $deleterecord;
        }
        public function delete2($equ_id) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tblequipment WHERE equ_id = '$equ_id'");
            return $deleterecord;
        }

    }
    

?>