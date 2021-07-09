<html>

<head></head>
<body>

    <main>

        <table>
            <tr>
                <th>Department Name</th>
                <th>Department Number</th>
                <th>Manager SSN</th>
                <th>Manager Start Date</th>
            </tr>

            <?php

            require("config.php");

            $sql = "SELECT * from employee.department";

            $result = $pdo->query($sql);

            foreach ($result as $row) {
        ?>
            <tr>
                <td><?php echo $row['Dname'] ?></td>
                <td><?php echo $row['Dnumber'] ?></td>
                <td><?php echo $row['Mgr_ssn'] ?></td>
                <td><?php echo $row['Mgr_start_date'] ?></td>
                <td><a href="edit.php?edit=<?php echo $row['Dnumber']?>">Edit</a></td>
                <td><a href="delete.php?del=<?php echo $row['Dnumber']?>">Delete</a></td>
                <td><a href="display.php?display=<?php echo $row['Dnumber']?>">Display employees</td>
            </tr>
        <?php
            }
        ?>

        </table>

        <a href="create.php">Create</a>

        


    </main>

</body>

</html>



