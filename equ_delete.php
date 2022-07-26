<?php 

    include_once('functions.php');

    if (isset($_GET['equ_id'])) {
        $equ_id = $_GET['equ_id'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete_equ($equ_id);

        if ($sql) {
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='view_equ.php'</script>";
        }
    }

?>