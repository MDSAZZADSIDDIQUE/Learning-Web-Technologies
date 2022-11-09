<html>
<head>
    <title>ADD PRODUCT</title>
</head>
<style>
    fieldset {
        display: inline-block;
        width: 50vw;
    }
</style>
<body>
    <form action="add_product.php" method="POST">
        <fieldset>
            <legend>DISPLAY</legend>
            <table>
                <tr>
                    <th>NAME</th>
                    <th>PROFIT</th>
                </tr>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'products_database');
                $sql = "SELECT * FROM products_information";
                $status = mysqli_query($connection, $sql);
                while
                ?>
            </table>
        </fieldset>
    </form>
</body>
</html>