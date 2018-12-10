<?PHP
  session_start();
  unset($_SESSION["acceso"]); 
  session_destroy();
  header("Location: ../access.php");
  exit;
?>