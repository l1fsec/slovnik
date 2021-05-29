<?php
  require_once "config.php";
 
  if (isset($_POST['query'])) {
     
    $query = "SELECT * FROM slova WHERE anglictina || cestina LIKE '{$_POST['query']}%' LIMIT 100";
    $result = mysqli_query($conn, $query);
 
  if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      echo $user['anglictina']."<br/>";
    }
  } else {
    echo "<p style='color:red'>Nenašel jsem nic.</p>";
  }
 
}
?>