<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
        }
        table,td, th{
            border: solid 1px  #4FB3BF;
            border-collapse: collapse;    
        }
        .baner, .stopka{
            background-color: #00838F;
            color: white;
            padding: 5px;
            font-size: 130%;
            text-align: center;
        }
        .blokLewy, .blokLewy2{
            background-color: #EFEFEF;
        }
    </style>
</head>
<body>
    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div class="container">
        <div class="blokLewy">
            <h3>Ryby zamieszkujące rzeki</h3>
            <?php
                try{$mysql = mysqli_connect("localhost", "root", "", "wedkarstwo");}
                catch(Exceptions){die();};
                $sql = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby INNER JOIN lowisko ON ryby.id=lowisko.ryby_id where lowisko.rodzaj = 3";
                $q = mysqli_query($mysql, $sql);    
                echo "<ol>";
                while($row = mysqli_fetch_assoc($q))
                {
                    echo "<li>".$row['nazwa']." pływa w rzece ".$row['akwen'].", ".$row["wojewodztwo"]."</li>";
                }
                echo "</ol>";
            ?>  
        </div>
        <div class="blokLewy2"> 
            <?php
                try{$mysql = mysqli_connect("localhost", "root", "", "wedkarstwo");}
                catch(Exceptions){die();};
                $sql = "SELECT id, nazwa, wystepowanie FROM ryby where styl_zycia=1";
                $q = mysqli_query($mysql, $sql);
                echo "<table>
                <tr>
                <th>L.p.</th><th>Gatunek</th><th>Wystepowanie</th>
                </tr>";
                while($row = mysqli_fetch_assoc($q))
                {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["nazwa"]."</td><td>".$row["wystepowanie"]."</td></tr>";
                }
                echo "</table>";

            ?>
        </div>
        <div class="blokPrawy"></div>
    </div>
    <div class="stopka"></div>
</body>
</html>