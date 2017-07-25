<?php
session_destroy();
session_unset();

// Redirection vers la page esgi-aire.com/home
header("Location: ".PATH_RELATIVE."home");
