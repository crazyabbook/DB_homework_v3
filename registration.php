<?php
include "functionsDB.php";
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="design.css">
        <title>Регистрация</title>
    </head>
    <body>
        <div>
            <form action="addController.php" method="POST" role='form'>
                <div>
                    <div>
                        <label for="passport_data">ФИО</label>
                        <div>
                            <input id="passport_data" type="text" name="passport_data"/>
                        </div>
                    </div>
                    <div>
                        <label for="start_date">Дата начала профессиональной деятельности</label>
                        <div>
                            <input id="start_date" type="date" name="start_date"/>
                        </div>
                    </div>
                    <div>
                        <label for="date_of_employment">Дата начала работы в школе</label>
                        <div>
                            <input id="date_of_employment" type="date" name="date_of_employment"/>
                        </div>
                    </div>
                    <button type="submit" name="add">Добавить</button>
                </div>
            </form>
        </div>
    </body>
</html>