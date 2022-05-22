<?php
  require_once 'private/initialize.php';
  
  //Retireve product from Database
  // $dvd = find_DVD();
  // $book = find_Book();
  
  
  $furniture = find_Furniture();
  while ($prodFrn = $furniture->fetch_object()) {      
    $result[] = $prodFrn;
  }
  array("data"=>$result);
  
      
  
  
    // function deleteAll(){
      //   mass_delete_DVD();
      //   mass_delete_FRN();
      //   mass_delete_BK();
      // }
      // $massDel = deleteAll();  
      
?>