<?php
  require_once 'functions.php';

  if (isset($_POST['user']))
  {
    $user   = sanitizeString($_POST['user']);
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");
    $idlength = strlen($user);
    if ($result->rowCount())
      echo  "<span class='taken'>&nbsp;&#x2718; " .
            "The username '$user' is taken</span>";
    elseif($idlength > 16 || $idlength < 3){
        echo "<span class='taken'>&nbsp;&#x2718; " .
        "Please check your id length";
      }
    else
      echo "<span class='available'>&nbsp;&#x2714; " .
           "The username  '$user' is available</span>";
  }
?>
