<?php 

    include_once('functions.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $name_equ = $_POST['name_equ'];
        $total_equ = $_POST['total_equ'];
        $sql = $insertdata->insert3($fname, $lname, $name_equ, $total_equ);

        if ($sql) {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">บันทึกการยืมคืน</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">สกุล</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-3">
                <label for="name_equ">ชื่ออุปกรณ์</label>
                <input type="text" class="form-control" name="name_equ" required>
            </div>
            <div class="mb-3">
                <label for="total_equ">จำนวน</label>
                <input type="text" class="form-control" name="total_equ" required>
            </div>
            <button type="submit" name="insert" class="btn btn-success">บันทึก</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>