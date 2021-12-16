<?php 
include '../dbconnect.php'



    function seed($tablename, $columns = array(), $amount = 0) {
        $brand = array("SangSum","LG","ASUS","DELL","LENOVO");
        $sql = "Insert into $tablename ( `";
        //c2: so sanh với space để thêm dấu ,
        $value_insert = implode(", ", array_keys($columns));
        $sql .= "$value_insert` ) Values ( :";
        $value_insert = implode(", :", array_keys($columns));
        $sql .= "$value_insert)";
        $stmt = $pdo->prepare($sql);
        //add $amount db
        for($i = 0; $i < $amount; $i++) {
            foreach ($columns as $key => $value) {
                if($value == PDO::PARAM_STR) {
                    $str = $brand[rand(0, 4)];
                    $stmt->bindParam(":$key", $str, PDO::PARAM_STR);
                }
                if($value == PDO::PARAM_INT) {
                    $str = rand(0, 10);
                    $stmt->bindParam(":$key", $str, PDO::PARAM_INT);
                }
            }
        }
        $stmt->execute();
        echo $sql;
    }

    $columnsBrand = array(
        'name' => PDO::PARAM_STR,
        'desc' => PDO::PARAM_STR
    );
    var_dump(seed("brands", $columnsBrand, 2));

?>

