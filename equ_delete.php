<?php 

    include_once('functions.php');

    if (isset($_GET['del'])) {
        $equ_id = $_GET['equ_id'];
        $deletedata2 = new DB_con();
        $sql = $deletedata2->delete2($equ_id);

        if ($sql) {
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='view_equ.php'</script>";
        }
    }

?>