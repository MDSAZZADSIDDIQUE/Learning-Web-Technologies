<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Profile</th>
        </tr>
</table>
<table>
        <tr>
            <th>ID</th>
            <td>
            <?php echo $_COOKIE['id'] ?>
            </td>
            <th>NAME</th>
            <td>
            <?php echo $_COOKIE['name'] ?>
            </td>
            <th>EMAIL</th>
            <td>
            <?php echo $_COOKIE['email'] ?>
            </td>
            <th>USER TYPE</th>
            <td>
            <?php echo $_COOKIE['userType'] ?>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <?php
                echo "<a href='{$_COOKIE['userType']}_panel.php'>Go Home</a>"
                ?>
                </td>
        </tr>
    </table>
</body>
</html>