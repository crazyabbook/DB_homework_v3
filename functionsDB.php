<?php
$link=false;
function openDB()
{
    global $link;
    $link=mysqli_connect("localhost", "root", "", "school");
    mysqli_query($link, "SET NAMES UTF8");
}
function closeDB()
{
    global $link;
    mysqli_close($link);
}
function getInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM teachers");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
function deleteByID($id)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "DELETE FROM teachers WHERE teacher_id=$id");
    closeDB();
    return $res;
}
function addTeacher($passport_data, $start_date, $date_of_employment)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "INSERT into teachers (passport_data, start_date, date_of_employment) value ('$passport_data', '$start_date', '$date_of_employment')");
    closeDB();
    return $result;
}
?>