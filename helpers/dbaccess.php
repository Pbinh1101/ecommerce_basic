<?php
include '../dbconnect.php';
$v = [];
            
        $stmt = $pdo->query('SELECT * from brands ');
        //Thiết lập kiểu dữ liệu trả về
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $stmt->execute();
        // $resultSet = $stmt->fetchAll();
        /*Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
        $resultSet = $
        stmt->fetchAll(PDO::FETCH_ASSOC);*/

        foreach ($stmt->fetchAll() as $row) {
            $v[] = $row['id'];
        }


        $l = [];
        $stmt = $pdo->query('SELECT * FROM categories');
        //Thiết lập kiểu dữ liệu trả về
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $stmt->execute();
        // $resultSet = $stmt->fetchAll();
        /*Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
        $resultSet = $
        stmt->fetchAll(PDO::FETCH_ASSOC);*/

        foreach ($stmt->fetchAll() as $row) {
            $l[] = $row['id'];
        }
        
        $o = [];
        $stmt = $pdo->query('SELECT * FROM orders');
        //Thiết lập kiểu dữ liệu trả về
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $stmt->execute();
        // $resultSet = $stmt->fetchAll();
        /*Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
        $resultSet = $
        stmt->fetchAll(PDO::FETCH_ASSOC);*/

        foreach ($stmt->fetchAll() as $row) {
            $o[] = $row['id'];
        }


        $bi = [];
        $stmt = $pdo->query('SELECT * FROM products ');
        //Thiết lập kiểu dữ liệu trả về
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $stmt->execute();
        // $resultSet = $stmt->fetchAll();
        /*Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
        $resultSet = $
        stmt->fetchAll(PDO::FETCH_ASSOC);*/

        foreach ($stmt->fetchAll() as $row) {
            $bi[] = $row['id'];
        }

        $cu = [];
        $stmt = $pdo->query('SELECT * FROM customers ');
        //Thiết lập kiểu dữ liệu trả về
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $stmt->execute();
        // $resultSet = $stmt->fetchAll();
        /*Trong trường hợp chưa setFetchMode() bạn có thể sử dụng
        $resultSet = $
        stmt->fetchAll(PDO::FETCH_ASSOC);*/

        foreach ($stmt->fetchAll() as $row) {
            $cu[] = $row['id'];
        }

            


