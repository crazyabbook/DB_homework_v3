<?php
include "functionsDB.php";
addTeacher($_POST['passport_data'], $_POST['start_date'], $_POST['date_of_employment']);
header("Location: website.php");
?>