<?php
    include "basedatos.php";
    $sec = $_POST['btn'];

    switch($sec){
        case 1:
            $query = DataBase::query("SELECT DocId, Specification, Revision, Dates, Levels FROM Documents ORDER BY Dates DESC")->fetch_row();           
            break;
        case 2:
            $query = DataBase::query("SELECT DocId, Specification, Revision, Dates, Levels FROM Documents WHERE Levels = (SELECT Levels - 1 FROM Users WHERE UserId = 'Jefe calidad') ORDER BY Dates DESC")->fetch_row();
            echo "hola prro";
            break;
        case 3:
            $query = DataBase::query("SELECT DocId, Specification, Revision, Dates, Levels FROM Documents WHERE Levels >= 4 ORDER BY Dates DESC")->fetch_row();
            break;
        case 4:
            $query = DataBase::query("SELECT d.DocId, d.Specification, d.Revision, d.Dates, d.Levels FROM Documents as d INNER JOIN Rejected as r on d.DocId = r.DocId ORDER BY d.Dates DESC")->fetch_row();
            break;
    }
    header('Location: user.php?vec=' .$query. '&seccion=' .$sec);
    //header('Location: user.php?userId='.$usuario);
?>