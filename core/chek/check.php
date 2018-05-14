<?php
session_start();
if (isset($_SESSION['user_id']) && $_SESSION!==null) {
       header("location: ../production/perfil.php");
    }
