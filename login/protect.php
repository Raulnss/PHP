<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    die("<h1>Voce nao pode acessar.</h1><p><a href=\"index.html\">Entrar</a></p>");
}
?>