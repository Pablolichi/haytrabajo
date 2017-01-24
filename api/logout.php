<?php
/**
 * Cierre de SESSION y unset de todos los valores
 */
session_start();

unset($_SESSION['logged']);
unset($_SESSION['user']);
unset($_SESSION['user-id']);
?>