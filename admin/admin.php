<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admStyle.css">
    <title>Document</title>
</head>
<body>
    <header>
        lista zamówień
    </header>
    <main>
        <table>

            <tr>
                <th>ID</th>
                <th>IMIE NAZWISKO</th>
                <th>ADRES</th>
                <th>NUMER TEL</th>
                <th>CREDIT</th>
                <th>EMAIL</th>
                <th>GODZINA ZAMOWIENIA</th>
            </tr>
            <?php
            error_reporting(0);
            $conn = mysqli_connect(
                'localhost',
                'root',
                '',
                'dupson'
            );
            $sql = "SELECT * FROM zamowienia1" ;
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["imienazwisko"]."</td>";
                echo "<td>".$row["adres"]."</td>";
                echo "<td>".$row["numertel"]."</td>";
                echo "<td>".$row["credit"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["DATA"]."</td>";
                echo "</tr>";
            }
            $conn -> close();
            ?>
        </table>

    </main>
</body>
</html>