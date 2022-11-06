<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
    <title>DataTables example - Zero configuration</title>

</head>
<body class="dt-example">
<form>
    <table align=center border=0 bordercolor=#FFFFFF width=1000 height=41 bgcolor=#FFFFFF >
        <thead>
        <tr>
            <td align=right color=#FFFFFF><font face=Arial size=1 COLOR=#000000>Name des Pferdes (Schreiben Sie den vollständigen Namen oder einen Teil des Namens.):</td>
            <td align=left color=#FFFFFF><font face=Arial size=1 COLOR=#000000>
                    <input type="text" name="T1" size="20"  <?php $T1 = $_GET['T1']; if (isset($_GET["T1"])) { echo "value=".$T1; } ?>><font size="2">
                        <input type=checkbox name=c1 value="true" <?php if (isset($_GET["c1"])) { echo "checked"; } ?>/></td>

            <td align=right color=#FFFFFF><font face=Arial size=1 COLOR=#000000></td>
            <td align=right color=#FFFFFF><font face=Arial size=1 COLOR=#000000></td>
            <td align=right color=#FFFFFF><font face=Arial size=1 COLOR=#000000></td>
            <td align=center color=#FFFFFF></font face=Arial size=1 COLOR=#000000>

                <?php  $S1 =$_GET['countries'];?>
                <select name=countries id=countries />
                <option value=Polen <?php if ($S1 == "Polen") { echo "selected"; } ?>/>Polen</option>
                <option value=Ungarn <?php if ($S1 == "Ungarn") { echo "selected"; } ?>/>Ungarn</option>
                <option value=Slovakai <?php if ($S1 == "Slovakai") { echo "selected"; } ?>/>Slowakei</option>
                <option value=Csehei <?php if ($S1 == "Csehei") { echo "selected"; } ?>/>Tschechische Republik</option>
                <option value=Rumänien <?php if ($S1 == "Rumänien") { echo "selected"; } ?>/>Rumänien</option>
                <option value=Österreich <?php if ($S1 == "Österreich") { echo "selected"; } ?>/>Österreich</option>
                <option value=Italien <?php if ($S1 == "Italien") { echo "selected"; } ?>/>Italien</option>
                <option value=Frankreich <?php if ($S1 == "Frankreich") { echo "selected"; } ?>/>Frankreich</option>
                <option value=Deutschland <?php if ($S1 == "Deutschland") { echo "selected"; } ?>/>Deutschland</option>
                </select>

                <input type=checkbox name=c2 value="true" <?php if (isset($_GET["c2"])) {echo "checked"; } ?>/></td>
            <?php  $S2 =$_GET['sex'];?>
            <td align=left color=#FFFFFF><font face=Arial size=1 COLOR=#000000>
                    <select name=sex id=sex>
                        <option value=Hengst <?php if ($S2 == "Hengst") { echo "selected"; }?>/>Hengst</option>
                        <option value=Stute <?php if ($S2 == "Stute") { echo "selected"; }?>/>Stute</option>
                        <option value=Zuhthengst <?php if ($S2 == "Zuhthengst") { echo "selected"; } ?>/>Zuhthengst</option>
                    </select>

                    <input type=checkbox name=c3 value="true" <?php if (isset($_GET["c3"])) { echo "checked"; } ?>/></td>

            <td align=left color=#FFFFFF><font face=Arial size=1 COLOR=#000000><button type="submit">Filter</button></td>
        </tr>
        <tr>
            <td align=right color=#FFFFFF><font face=Arial size=1 COLOR=#000000>UELN Nummer  (Schreiben Sie den vollständigen Nummer oder einen Teil):</td>
            <td align=left color=#FFFFFF><font face=Arial size=1 COLOR=#000000>
                    <input type="text" name="T4" size="20"  <?php $T4 = $_GET['T4']; if (isset($_GET["T4"])) { echo "value=".$T4; } ?>><font size="2">
                        <input type=checkbox name=c4 value="true" <?php if (isset($_GET["c4"])) { echo "checked"; } ?>/></td>
        </tr>
        <tr>
            <td align=right color=#FFFFFF><font face=Arial size=1 COLOR=#000000>Geburtsdatum (Schreiben Sie den vollständigen Geburtsdatum oder einen Teil):</td>
            <td align=left color=#FFFFFF><font face=Arial size=1 COLOR=#000000>
                    <input type="text" name="T5" size="20"  <?php $T5 = $_GET['T5']; if (isset($_GET["T5"])) { echo "value=".$T5; } ?>><font size="2">
                        <input type=checkbox name=c5 value="true" <?php if (isset($_GET["c5"])) { echo "checked"; } ?>/></td>
        </tr>
        <tr>
            <td align=right color=#FFFFFF><font face=Arial size=1 COLOR=#000000>Stutenfamilienbegründerin (Schreiben Sie den vollständigen Stutenfamilien. oder einen Teil):</td>
            <td align=left color=#FFFFFF><font face=Arial size=1 COLOR=#000000>
                    <input type="text" name="T6" size="20"  <?php $T6 = $_GET['T6']; if (isset($_GET["T6"])) { echo "value=".$T6; } ?>><font size="2">
                        <input type=checkbox name=c6 value="true" <?php if (isset($_GET["c6"])) { echo "checked"; } ?>/></td>
        </tr>
    </table>

    <div class="container">
        <section>
            <?php

            //error_reporting(0);

            include "con-hucul.inc";

            //header("Content-Type: text/html; charset=utf-8");

            $rec_limit = 15; // poradie riadkov
            $em = "<a href=karta.php?id=";


            $kod_pk = $_GET['kod_pk'];
            $kod_pohl = $_GET['kod_pohl'];
            $page = $_GET['page'];
            $first = 1;
            $where = "";

            if(!$kod_pohl){
                $kod_pohl =1;
            }

            if(!$kod_pk){
                $kod_pk =14;
            }

            if (isset($_GET['c1']))
            {
                $T1 = $_GET['T1'];
                $arguments[] = "name LIKE '%".$T1."%'";
            }

            if (isset($_GET['c2']))
            {
                $T2 = $_GET['countries'];
                $arguments[] = "country LIKE '%".$T2."%'";
            }

            if (isset($_GET['c3']))
            {
                $T3 = $_GET['sex'];
                $arguments[] = "sex LIKE '%".$T3."%'";
            }

            if (isset($_GET['c4']))
            {
                $T4 = $_GET['T4'];
                $arguments[] = "ueln LIKE '%".$T4."%'";
            }

            if (isset($_GET['c5']))
            {
                $T5 = $_GET['T5'];
                $arguments[] = "birth LIKE '%".$T5."%'";
            }

            if (isset($_GET['c6']))
            {
                $T6 = $_GET['T6'];
                $arguments[] = "familia LIKE '%".$T6."%'";
            }

            if(!empty($arguments)) {
                $str = implode(' AND ',$arguments);
                $sql = "SELECT id, name, ueln, pk_num, birth, country, sex, color, brand, chip, father, mather, familia FROM kmen WHERE ". $str ." ORDER BY NAME";
            }
            else {
                $sql = "SELECT id, name, ueln, pk_num, birth, country, sex, color, brand, chip, father, mather, familia FROM kmen ORDER BY NAME";
            }


            //echo "<p align=center><font face=Arial size=3 color=#000000><b>".$sql."</b></font><BR>";
            $vyber = mysqli_query($pripoj,$sql); // vyberie v�etko z tabu�ky
            if (!$vyber ) {
                die('Invalid query: ' . mysqli_error());
            }
            $pocet_riadkov = mysqli_num_rows($vyber); // vyberie po�et riadkov
            $pocet_stlpcov = mysqli_num_fields($vyber); // vyberie po�et st�pcov




            echo "___________________________________________________________________________________________________________________</BR>";

            echo "<table id=example class=display align=center border=0 bordercolor=#111111 width=1000 height=41 bgcolor=#FFFFFF BACKGROUND=logo.jpg >";
            echo "<thead>";
            echo "<tr>";
            echo "<th align=left width=53><font face=Arial size=1>Id</th>";
            echo "<th align=left width=53><font face=Arial size=1>Name des Pferdes</th>";
            echo "<th align=left width=43><font face=Arial size=1>UELN Nummer</th>";
            echo "<th align=left width=43><font face=Arial size=1>Eintragungsnummer</th>";
            echo "<th align=left width=43><font face=Arial size=1>Geburtsdatum</th>";
            echo "<th align=left width=43><font face=Arial size=1>Geburtsland</th>";
            echo "<th align=left width=43><font face=Arial size=1>Geschlecht</th>";
            echo "<th align=left width=43><font face=Arial size=1>Stutenfamilienbegründerin</th>";
            echo "</tr>" ;
            echo "</thead>";
            echo "<tbody>";
            while ($row = $vyber->fetch_assoc()) {
                //echo json_encode( $row );
                echo "<tr>";
                echo "<td align=left width=43><font face=Arial size=1>".$row["id"]."</td>";
                echo "<td align=left width=43><font face=Arial size=1>".$em.$row["id"].">".$row["name"]."</td>";
                echo "<td align=left width=43><font face=Arial size=1>".$row["ueln"]."</td>";
                echo "<td align=left width=43><font face=Arial size=1>".$row["pk_num"]."</td>";
                echo "<td align=left width=43><font face=Arial size=1>".$row["birth"]."</td>";
                if($row["country"]=="Polen"){
                    echo "<td><IMG SRC=fl_pl.jpg border=1 lowsrc=logo.jpg></td>";
                } else if($row["country"]=="Ungarn")
                {
                    echo "<td><IMG SRC=fl_hu.jpg border=1 lowsrc=logo.jpg></td>";
                } else if($row["country"]=="Rum")
                {
                    echo "<td><IMG SRC=fl_ro.jpg border=1 lowsrc=logo.jpg></td>";
                }else if($row["country"]=="Slovakai")
                {
                    echo "<td><IMG SRC=fl_sk.jpg border=1 lowsrc=logo.jpg></td>";
                }else if($row["country"]=="Österreich")
                {
                    echo "<td><IMG SRC=fl_os.jpg border=1 lowsrc=logo.jpg></td>";
                }else if($row["country"]=="Italien")
                {
                    echo "<td><IMG SRC=fl_it.jpg border=1 lowsrc=logo.jpg></td>";
                }else if($row["country"]=="Deutschland")
                {
                    echo "<td><IMG SRC=fl_de.jpg border=1 lowsrc=logo.jpg></td>";
                }else if($row["country"]=="Frankreich")
                {
                    echo "<td><IMG SRC=fl_fr.jpg border=1 lowsrc=logo.jpg></td>";
                }else if($row["country"]=="Csehei")
                {
                    echo "<td><IMG SRC=fl_cz.jpg border=1 lowsrc=logo.jpg></td>";
                }else if($row["country"]=="Rumänien")
                {
                    echo "<td><IMG SRC=fl_ro.jpg border=1 lowsrc=logo.jpg></td>";
                } else  echo "<td align=left width=53><font face=Arial size=1>".$row["country"]."</td>";
                if($row["sex"]=="Hengst"){
                    echo "<td><IMG SRC=male.png></td>";
                } else if($row["sex"]=="Stute")
                {
                    echo "<td><IMG SRC=female.png></td>";
                } else  echo "<td align=left width=53><font face=Arial size=1>".$row["sex"]."</td>";
                echo "<td align=left width=53><font face=Arial size=1>".$row["familia"]."</td>";
                echo "</tr>" ;

            }


            echo "</tbody>";
            echo "<tfoot>";
            echo "<tr>";
            echo "<th align=left width=43><font face=Arial size=1>Id</th>";
            echo "<th align=left width=43><font face=Arial size=1>Name des Pferdes</th>";
            echo "<th align=left width=43><font face=Arial size=1>UELN Nummer</th>";
            echo "<th align=left width=43><font face=Arial size=1>Eintragungsnummer im Zuchtbuch der Mitgliedsorganisation</th>";
            echo "<th align=left width=43><font face=Arial size=1>Geburtsdatum</th>";
            echo "<th align=left width=43><font face=Arial size=1>Geburtsland</th>";
            echo "<th align=left width=43><font face=Arial size=1>Geschlecht</th>";
            echo "<th align=left width=43><font face=Arial size=1>Stutenfamilienbegründerin</th>";
            echo "</tr>" ;
            echo "</tfoot>";
            echo "</table>";

            echo "<p align=center><font face=Arial size=1><b>Hif database - V 1.0</font></p>";
            echo "<p align=center><IMG SRC=logo_sm.jpg border=2 lowsrc=logo.jpg><BR><BR>";

            ?>
</form>
</section>
</div>
</body>
</html>


