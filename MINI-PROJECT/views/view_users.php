
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_users_styles.css">
    <title>Document</title>
</head>
<body>
    <div class="viewUsers">
    <table>
        <tr>
            <th>Users</th>
        </tr>
    </table>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>USER TYPE</th>
        </tr>
                <?php
                require_once "../models/database_connection.php";
                $connection = getConnection();
                    $sql = "SELECT * FROM users_information";
                    $usersInformation = mysqli_query($connection, $sql);
                    while ($userInformation = mysqli_fetch_array($usersInformation)) {
                        echo "<tr>";
                        echo "<td>{$userInformation[0]}</td>";
                        echo "<td>{$userInformation[2]}</td>";
                        echo "<td>{$userInformation[3]}</td>";
                        echo "<td>{$userInformation[4]}</td>";
                        echo "</tr>";
                    }
                ?>
                    </table>
    <table>
                <tr>
                    <td><a href="admin_panel.php">Go Home</a></td>
                </tr>
    </table>
    </div>
    
</body>
</html>
