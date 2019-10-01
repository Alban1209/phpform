<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Catégories de QCM</title>
    </head>
<body>
    <form action="index.php">

        <h1>Catégories de QCM</h1>
        <label>Identifiant de la catégorie</label>
        <input name="shortname" size="10"/>

    </form>

    <?php
        if (isset($_GET['shortname'])) {
            $shortname = $_GET['shortname'];
            print $shortname;
        }

        $host = "localhost";
        $username = "slamquizz";
        $passwd = "bCjU0X7YuZcygBXJ";
        $dbname = "slamquizz";

        $idConnexion = new MySQLi($host, $username, $passwd, $dbname);

            if ($idConnexion) {

                $result = $idConnexion->query("SELECT * FROM tbl_categories WHERE shortname='" . $shortname . "';");
            }
    ?>

</body>
</html>