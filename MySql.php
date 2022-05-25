<?php

function clearInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {

    $firstname = clearInput($_POST['firstname']);
    $lastname = clearInput($_POST['lastname']);

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "root";
    $db_base = "bitrix";
    $db_table = "users";

    try {
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        $db->exec("set names utf8");
        $data = array('firstname' => $firstname, 'lastname' => $lastname);
        $query = $db->prepare("INSERT INTO $db_table (firstname, lastname) values (:firstname, :lastname)");
        $query->execute($data);
        $result = true;
    } catch (PDOException $e) {
        print "Ошибка : " . $e->getMessage() . "<br/>";
    }

    if ($result) {
        print "Привет, {$firstname} {$lastname}!";
    }
}