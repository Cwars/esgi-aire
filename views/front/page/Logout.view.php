<?php
// Redirection vers la page esgi-aire.com/home et deconnexion
session_destroy();
session_unset();

header("Location: ".PATH_RELATIVE."login");