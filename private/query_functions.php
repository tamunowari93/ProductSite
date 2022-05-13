<?php

  // Products

  function find_all_products($options=[]) {
    global $db;

    $visible = $options['visible'] ?? false;

    $sql = "SELECT * FROM products ";
    if($visible) {
      $sql .= "WHERE visible = true ";
    }
    $sql .= "ORDER BY position ASC";
    //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_product_by_id($id, $options=[]) {
    global $db;

    $visible = $options['visible'] ?? false;

    $sql = "SELECT * FROM products ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    if($visible) {
      $sql .= "AND visible = true";
    }
    // echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $product = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $product; // returns an assoc. array
  }


  function insert_DVDItem($item) {
    global $db;
    $sql = "INSERT INTO dvd ";
    $sql .= "(sku, name, price, typeName, size, description) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $item[$item->sku()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->name()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->price()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->prod_type()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->size()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->description()]) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  }

  function delete_product($sku) {
    global $db;

    $sql = "DELETE FROM products ";
    $sql .= "WHERE id='" . db_escape($db, $sku) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }


?>
