<?php
    require("config.php");
    $no = $name = $ssn = $date = "";

    if (isset($_REQUEST['submit'])){
        if (isset($_POST['no']) && !empty($_POST['no'])){
            $no = $_POST['no'];
        }
    
        if (isset($_POST['name']) && !empty($_POST['name'])){
            $name = $_POST['name'];
        }
    
        if (isset($_POST['ssn']) && !empty($_POST['ssn'])){
            $ssn = $_POST['ssn'];
        }
    
        if (isset($_POST['date']) && !empty($_POST['date'])){
            $date = $_POST['date'];
            $time = strtotime($date);
            $newformat = date('Y-m-d',$time);

            // echo gettype($newformat);
            // // $newdate = date('Y-m-d', strtotime($date));
        }
    
        $query ="INSERT INTO department (Dname, Dnumber, Mgr_ssn, Mgr_start_date)
                VALUES ('$name',$no,'$ssn',CAST('$date' AS DATE))";
        
        $result = $pdo->exec($query);
        if($result >0){
            echo "<script type='text/javascript'>alert('Create successfully');</script>";
            echo "<script>window.location.href='index.php';</script>";
            exit;
        };
    }
?>

<html>

<body>
    <form method="post">
        <label for="name">Department Name</label>
        <input type="text" id="name" name="name"/>
        <label for="no">Department number</label>
        <input type="number" id="no" name="no"/>
        <label for="ssn">Manager Ssn</label>
        <input type="text" id="ssn" name="ssn"/>
        <label for="date">Manager Start Date</label>
        <input type="date" required pattern="\d{4}-\d{2}-\d{2}" id="date" name="date"/>
        <button type="submit" name="submit" class="button_submit">Submit</button>
    </form>

</body>

</html>