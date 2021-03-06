<!DOCTYPE html>
<html lang="pl">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,700;1,200&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vibepresets.css">
    <title>Friday Media - Usługi</title>
</head>

<body>
    <div class="header">
        <a href="../index.html" class="headtext">
            Strona Główna
        </a>
        <a href="../podstrony/about.html" class="headtext">
            O mnie
        </a>
        <a href="../index.html"><img src="../img/logo.png" alt="Logo" class="headimg"></a>

        <a href="/podstrony/services.html" class="headtext">
            Usługi
        </a>
        <a href="/podstrony/kontakt.html" class="headtext">
            Kontakt
        </a>
    </div>






    <div class="product">
        <div class="prodimg">
            <img src="/img/vibepresets.png">
        </div>
        <div class="prodtext">
            <h1>Vibe Presets</h1>
            <p class="desc">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic assumenda facere voluptatum quo
                necessitatibus ex porro recusandae fuga, velit nam itaque odit! Obcaecati quia dolores autem. Iure sed
                numquam qui!
            </p>
        </div>

<!--        PO wcisnieciu kup teraz dane do bazy  Z bazy do admin panel-->
        <div class="checkout">
            <form action="vibepresets.php" method="POST">
                <label for="fn"> Full Name</label>
                <input type="text" id="fn" name="firstname" placeholder="Mateusz Caban" required>
                <br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="mateusz@caban.xd" required>
                <br>
                <label for="adress">Address</label>
                <input type="text" id="adress" name="address" placeholder="Cabanero" required>
                <br>
                <label for="phoneNum">Phone Number</label>
                <input type="text" id="phoneNum" name="phoneNum" placeholder="123-456-789" required>
                <br>
                <label for="ccard">Credit Card</label>
                <input type="text" id="ccard" name="ccard" placeholder="xxxx-xxxx-xxxx-xxxx" required>
                <br>
                <input type="submit" name="submit" value="Kup Tera"/>
            </form>
        </div>
    </div>
    <?php
//    wyłącza głupie błedy!!!!!!!!
    error_reporting(0);
    // połączenie z baza danych
        $conn = mysqli_connect(
                'localhost',
            'root',
            '',
            'dupson'
        );
        //zabieranie z posta pierdół z formularza
        $fullname = $_POST['firstname'];
        $email = $_POST['email'];
        $adres = $_POST['address'];
        $numtel = $_POST['phoneNum'];
        $card = $_POST['ccard'];
        $DATA = date('Y-m-d H:i:s'); // rok miesiac data godzina minuta sekunda
        // bierzemy z posta i wrzucamy do bazy
        $sql = "INSERT INTO zamowienie1 (id, imienazwisko, adres, numertel, credit, email, DATA) VALUES ('', '$fullname', '$adres', '$numtel', '$card', '$email', '$DATA')";
        $result = $conn->query($sql); // wykonuje kwerende
        $conn -> close(); //zamyka polaczenie
    ?>











    <br>
    <hr>
    <br>
    <div class="bottom">
        <div class="newsletter">
            <h3>Dołącz do naszej społeczności!</h3>
            <form action="/url" method="GET" class="input">
                <input type="text" placeholder="Imię" required>
                <input type="text" placeholder="Nazwisko" required>
                <button type="submit">Dołącz</button>
            </form>
        </div>
        <div class="nawigacja">
            <a href="index.html">
                Strona Główna
            </a>
            <a href="index.html">
                O mnie
            </a>
            <a href="index.html">
                Usługi
            </a>
            <a href="index.html">
                Kontakt
            </a>
        </div>
    </div>
    <br>
    <br>
</body>

</html>