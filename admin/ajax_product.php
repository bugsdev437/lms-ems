

<?php

require_once('../assets/constants/config.php');
require_once('../assets/constants/check-login.php');
require_once('../assets/constants/fetch-my-info.php');

 
?>

<?php



  if(isset($_POST['drop_services']))
  {

      
       $sql_service1 ="SELECT * FROM tbl_product WHERE id  = '".$_POST['drop_services']."' AND delete_status='0' AND color=? AND size=?";
       $statement = $conn->prepare($sql_service1);
 $statement->execute([$_POST['color'],$_POST['size']]);
                                                             
                                                                
    $service1 = $statement->fetch(PDO::FETCH_ASSOC);
 
        $data['product']=$service1;

        $data['products'] = $statement->fetchAll();

        echo json_encode($data); exit;
  }
?>