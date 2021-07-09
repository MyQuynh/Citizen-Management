<?php
    require("config.php");
?>


<html>

<body>

    <main>

        <table>
            <tr>
                <th>Name</th>
                <th>Mnit</th>
                <th>Lname</th>
                <th>Ssn</th>
                <th>Bdate</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Salary</th>
                <th>Super ssn</th>
                <th>Dno</th>
            </tr>
            <?php

                if (isset($_GET['display'])){
                    
                    $dno = $_GET['display'];
                    $query = "SELECT * FROM employee.employee WHERE employee.Dno = $dno";
                    $result = $pdo->query($query);
                    $count = 0;
                    foreach ($result as $row){
            ?>
                       <tr>
                            <td><?php echo $row['Fname'] ?></td>
                            <td><?php echo $row['Minit'] ?></td>
                            <td><?php echo $row['Lname'] ?></td>
                            <td><?php echo $row['Ssn'] ?></td>
                            <td><?php echo $row['Bdate'] ?></td>
                            <td><?php echo $row['Address'] ?></td>
                            <td><?php echo $row['Sex'] ?></td>
                            <td><?php echo $row['Salary'] ?></td>
                            <td><?php echo $row['Super_ssn'] ?></td>
                            <td><?php echo $row['Dno'] ?></td>
                       </tr>
                    <?php
                    }

                } else {
                    echo "Cannot do";
                }

            ?>
        
        </table>
        <a href="index.php">Go back</a>
    </main>
</body>

</html>