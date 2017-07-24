<?php
session_destroy();
session_unset();

header("Location: ".PATH_RELATIVE."/home");
