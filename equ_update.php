<?php 

    include_once('functions.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {

        $equ_id = $_GET['equ_id'];
        $name_equ = $_POST['name_equ'];
        $total_equ = $_POST['total_equ'];
        $sql = $updatedata->update2($name_equ, $total_equ, $equ_id);
        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='view_equ.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='equ_update.php'</script>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="mt-5">แก้ไขอุปกรณ์</h1>
        <hr>
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <?php 

            $equ_id = $_GET['equ_id'];
            $updateequ = new DB_con();
            $sql = $updateequ->fetchonerecord2($equ_id);
            while($row = mysqli_fetch_array($sql)) {
        ?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="name_equ" class="form-label">name_equ</label>
                <input type="text" class="form-control" name="name_equ" 
                    value="<?php echo $row['name_equ']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="total_equ" class="form-label">total_equ</label>
                <input type="text" class="form-control" name="total_equ"
                    value="<?php echo $row['total_equ']; ?>" required>
            </div>
            
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    
</body>
</html>