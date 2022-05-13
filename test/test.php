<?php

echo "Hello world";
$form = htmlspecialchars($_POST['product_form']);

if($form) {
    echo "Save Button is selected";
  };

?>
