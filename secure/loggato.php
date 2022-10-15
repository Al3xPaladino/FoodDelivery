<?php if (isset($_SESSION['username'])) {
  $_SESSION['erro'] = "Error 404! [Page not found]";
  header("Location: index.php");
  die;
}