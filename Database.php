<?php

class Database {
    // uztaisit metodi query
    public function query($sql){
        //Data source name
        $dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog;charset=utf8mb4";

        // PHP data object
        $pdo = new PDO($dsn);

        // sagatavot vaicajumu
        $statement = $pdo->prepare($sql);
        // izpildit vaicajumu
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}




