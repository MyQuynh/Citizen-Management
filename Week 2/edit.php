<?php
    require("config.php");

    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $query = "SELECT * FROM employee.department WHERE department.Dnumber = $id";
        $result = $pdo->query($query);
        foreach($result as $row){
            $name = $row['Dname'];
            $no = $row['Dnumber'];
            $ssn = $row['Mgr_ssn'];
            $date = $row['Mgr_start_date'];
        }

        if(isset($_REQUEST['submit'])){
            if (isset($_POST['name']) && !empty($_POST['name'])){
                $name = $_POST['name'];
                $query = "UPDATE employee.department SET department.Dname = '$name' WHERE department.Dnumber = $no";
                $pdo->exec($query);
            }


            if (isset($_POST['ssn']) && !empty($_POST['ssn'])){
                $ssn = $_POST['ssn'];
                $query = "UPDATE employee.department SET department.Mgr_ssn = '$ssn' WHERE department.Dnumber = $no";
                $pdo->exec($query);
            }

            if (isset($_POST['date']) && !empty($_POST['date'])){
                $date = $_POST['date'];
                $query = "UPDATE employee.department SET department.Mgr_start_date = TO_DATE($date, 'YYYY-MM-DD') WHERE department.Dnumber = $no";
                $pdo->exec($query);
            }

            echo "<script>alert('Update $id successful');</script>";
        }
    }
?>

<form method="post">
    <label for="name">Department name</label>
    <input type="text" name="name" id="name" placeholder="<?=$name?>">

    <label for="no">Department no</label>
    <input type="text" name="no" id="no" placeholder="<?=$no?>">

    <label for="name">Manager ssn</label>
    <input type="number" name="ssn" id="ssn" placeholder="<?=$ssn?>">

    <label for="name">Manger start date</label>
    <input type="date" name="date" id="date" placeholder="<?=$date?>">

    <button type="submit" name="submit" class="button_submit">Submit</button>

</form>

<a href="index.php"><button class="">Back to dashboard</button></a>