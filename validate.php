<?php
  class validate{
    public function checkEmpty($data, $fields){
      $msg = null;
      foreach ($fields as $value){
        if (empty($data[$value])){
          $msg .= "<p>$value field empty</p>";
        }
      }
      return $msg;
    }
    // Validate email address
    public function validEmail($email){
      if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
      }
      return false;
    }
  }
?>