<?php
// include '../dbconnect.php';
include '../random.php';
include 'dbaccess.php';  
/**
 * Seed data for brand table
 */

    // function seed($tableName , $columns = array(), $amount = 0) {
        
    //     $sql = "INSERT INTO brands (`name`, `desc`) values (:name, :desc)";
    //     $stmt = $pdo->prepare($sql);
    //     for ($i , $i < $amount , Si++){
    //         foreach($columns as $key =>$value){
    //             if ($value == PDO::PARAM_STR){
    //                 $str = rand_str();
    //                 $stmt->bindParam('$key', $str, PDO::PARAM_STR);
    //             }
    //             if ($value == PDO::PARAM_INT){
    //                 $int = rand_int();
    //                 $stmt->bindParam('$key', $int, PDO::PARAM_INT);
    //             }
    //         }
            
    //     }
    //     $stmt->execute();

    // }

    // $columnsBrand = array(
    //     'name' => PDO::PARAM_STR,
    //     'desc' => PDO::PARAM_STR,
    // );


           
            // $stmt = $pdo->prepare('INSERT INTO products  ( `id_sanpham`, `name`, `price`, `view`, `discount`, `brand_id`, `category_id`) VALUES (:id_sanpham,:name, :price, :view, :discount, :brand_id, :category_id)');
            // $b = 1;
            // $c = "binh";

            // $stmt->bindParam(':id_sanpham', $b, PDO::PARAM_STR);
            // $stmt->bindParam(':name', $c, PDO::PARAM_STR);
            // $stmt->bindParam(':price', $b, PDO::PARAM_STR);
            // $stmt->bindParam(':view', $b, PDO::PARAM_STR);
            // $stmt->bindParam(':discount', $b, PDO::PARAM_STR);
            // $stmt->bindParam(':brand_id', $a[rand(0,count($a)-1)], PDO::PARAM_STR);
            // $stmt->bindParam(':category_id', $b, PDO::PARAM_STR);
            // $stmt->execute();


            //    table : catagories
        // $stmt = $pdo->prepare('INSERT INTO categories(`name`) values (:name )');
        // $i=1;
        // while ($i<=10)
        // {
        // $x=rand(0,10);
        // $name=$a[$x];
        // $stmt->bindParam(':name', $name, PDO::PARAM_STR); 
        // $stmt->execute();
        // $i++;
    
        // }  
//    table:brands
        // $stmt = $pdo->prepare('INSERT INTO brands (`name`, `desc`) values (:name, :desc)');
        // $i=1;
        // while ($i<=10)
        // {
        // $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        // $stmt->bindParam(':desc', $desc, PDO::PARAM_STR);
        // $x=rand(0,10);
        // $y=rand(0,5);

        // $name= $a[$x];
        // $desc= $b[$y];
        // $stmt->execute(); 
        // $i++;
        //  }  
//     // table:customers
    // $stmt = $pdo->prepare('INSERT INTO customers  (`fullname`, `email`,`pass`,`adress`,`phone`) values (:fullname,:email,:pass,:adress,:phone)');
    // $i=1;
    // while ($i<=6)
    // {
    //     $stmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
    //     $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    //     $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    //     $stmt->bindParam(':adress', $adress, PDO::PARAM_STR);
    //     $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    
    
    //     $y=rand(0,4);

    //     $fullname= $c[$y];
    //     $email   = $d[$y];
    //     $pass    = $e[$y];
    //     $adress  = $f[$y];
    //     $phone   = $t[$y];
    //     $stmt->execute(); 
    //     $i++;
    // }

// // table :products   
//     // mới
    // $stmt = $pdo->prepare('INSERT INTO products  ( id_sanpham, name, price, view, discount, brand_id, category_id) VALUES (:id_sanpham,:name, :price, :view, :discount, :brand_id, :category_id)');
    //     $i=1;
    //     while ($i<=100){

    //     $b = rand(0,4);
    //     $name = $g[$b];
    //     $price = $k[$b];
    //     $view = $p[$b];
    //     $discount = $h[$b];

    //     $stmt->bindParam(':id_sanpham', $b, PDO::PARAM_STR);
    //     $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    //     $stmt->bindParam(':price', $price, PDO::PARAM_STR);
    //     $stmt->bindParam(':view', $view, PDO::PARAM_STR);
    //     $stmt->bindParam(':discount', $discount, PDO::PARAM_STR);
    //     $stmt->bindParam(':brand_id', $v[rand(0,count($v)-1)], PDO::PARAM_STR);
    //     $stmt->bindParam(':category_id', $l[rand(0,count($l)-1)], PDO::PARAM_STR);
       
    //     $stmt->execute();
    //     $i++;
    // }
  
    $stmt = $pdo->prepare('INSERT INTO orders(`name`, `desc`, `created_at`, `status`, `customer_id`)
     VALUES (:name, :desc, :created_at, :status, :customer_id)');

         $i=1;
       while ($i<=100){
        $iu=rand(0,4);
        $yes=rand(0,1);
        $thang=rand(0,3);
        $desc= $b[$iu];
        $status=$ys[$yes];
        $created_at=$ngaay[$thang];
        $name=$a[$iu];

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':desc', $desc, PDO::PARAM_STR);
        $stmt->bindParam(':created_at', $created_at, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':customer_id', $cu[rand(0,count($cu)-1)], PDO::PARAM_STR);
        
        $stmt->execute();
        $i++;
      
       } 



                    

?>