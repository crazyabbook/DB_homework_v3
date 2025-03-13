<?php
include "functionsDB.php";
$info=getInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Домашнее задание</title>
    </head>
    <body>
        <div>
            <table>
                <thead><th>Код</th><th>ФИО</th><th>Дата начала работы</th><th>Дата поступления в школу</th><th>Удалить</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["teacher_id"];
                    $data=$info[$i]["passport_data"];
                    $date1=$info[$i]["start_date"];
                    $date2=$info[$i]["date_of_employment"];
                    echo "<tr><td>$id</td><td>$data</td><td>$date1</td><td>$date2</td>
                    <td><a href='deleteController.php?id=", $id, "'><img src='images/delete_icon.svg'></a></td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>