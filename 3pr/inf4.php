<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Wszystkie Smaki</title>
    <style>
        *{
            margin: 0;
        }
        body{
            background-color: #F6E5DC;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .baner{
            background-color: #2F180C;
            text-align: center;
            color: khaki;
            height: 60px;
        }
        .banerLewy{
            width: 60%;
        }
        .banerPrawy{
            font-size: 150%;
            padding: 70px;
            width: 40%;
        }
        .banerDolny{
            background-color: #D0B6A8;
            text-align: center;
            padding: 30px;
        }
        .stopka{
            background-color: #2F180C;
            color: khaki;
            height: 60px;
        }
        img{
            height: 350px;
        }
        .container{
            display: flex;
        }
        button{
            margin: 10px;
            padding: 5px;
            background-color: #2F180C;
            color: khaki;
        }
    </style>
</head>
<body>
    <div class="baner">
        <h1>Witamy w restauracji "Wszystkie Smaki"</h1>
    </div>
    <div class="container">
        <div class="banerLewy"><img src="menu.jpg" alt="Nasze danie"></div>
        <div class="banerPrawy">
            <h4>U nas dobrze zjesz!</h4>
            <ol>
                <li>Obiady do 40 zł</li>
                <li>Przekąski od 10 zł</li>
                <li>Kolacje od 20 zł</li>
            </ol>
        </div>
    </div>
    <div class="banerDolny">
        <h2>Zarezerwuj stolik on-line</h2>
        <form method="post">
            Data (format rrrr-mm-dd):<br>
            <input type="text"><br>
            Ile osób?:<br>
            <input type="number"><br>
            Twój numer telefonu:<br>
            <input type="text"><br>
            <input type="checkbox"> Zgadzam się na przetwarzanie moich danych osobowych<br>
            <button type="reset">WYSZYŚĆ</button> <button type="submit">REZERWUJ</button>
        </form>
    </div>
    <div class="stopka">
        Stronę internetową opracował:
    </div>
</body>
</html>