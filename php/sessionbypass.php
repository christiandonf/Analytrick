<?php

if (!isset($_SESSION)) {
  session_start();
}
if (!isset($_SESSION['id'])) {
} else {
  header("Location: ./dashboard.php");
}
