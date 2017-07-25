<?php

/*

$dark-background-color : #000;

$custom-font-family : 'Jaldi', sans-serif;;
$custom-font-color : #fff;

*/
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['font-color']) && isset($_POST['theme-color']) && isset($_POST['Font'])) {
        $fonts_available = array("EB Garamond", "Lustria", "Open Sans", "Jaldi");
        $fontcolortheme = str_replace('#','', htmlentities($_POST['font-color']));
        $backgroundtheme = str_replace('#','', htmlentities($_POST['theme-color']));
        $fonttheme = htmlentities($_POST['Font']);

        if (ctype_xdigit($backgroundtheme) && ctype_xdigit($fontcolortheme)) {

            if (in_array($fonttheme, $fonts_available))
            {
                $file = fopen('assets/front/scss/_variables-editable.scss', 'w+');
                if ($file !== false)
                {
                    $fw = fwrite($file, '$dark-background-color : #'.$backgroundtheme.';
                     $custom-font-family : '.$fonttheme.', Arial, sans-serif;
                     $custom-font-color : #'.$fontcolortheme.';');
                    fclose($file);
                    if($fw !== false)
                    {
                        require_once 'assets/scssphp-0.6.7/scss.inc.php';

                        use Leafo\ScssPhp\Compiler;
                        $scss = new Compiler();

                        print_r($scss);
                    } else {
                        $error = true;
                        $errors[] = "fwrite";
                    }

                } else {
                    $error = true;
                    $errors[] = "fopen";
                }
            } else {
                $error = true;
                $errors[] = "font";
            }
        } else {
            $error = true;
            $errors[] = "colors";
        }
    }
}



