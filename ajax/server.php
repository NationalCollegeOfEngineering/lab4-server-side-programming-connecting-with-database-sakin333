<?php
    include('database.php');
    if(isset($_GET['search'])){

        $pdo=connectDatabase();
        $select_query = "SELECT username FROM users WHERE username LIKE'%".$_GET['search']."%'";
        $stmt= $pdo ->query($select_query);
        $rows= $stmt->fetchAll(PDO::FETCH_ASSOC);
        $search_keyword = $_GET['search'];
        foreach ($rows as $row){
            echo $row['username'].',';
        }
    }
    ?>