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
                        header("Content-Type: text/html");
                        require_once('assets/PHamlP_3.2/sass/SassParser.php'); //including Sass libary (Syntactically Awesome Stylesheets)
                        $sass = new SassParser(array('style'=>'compressed'));
                        $css = $sass->toCss('assets/front/scss/screen.scss');
                        print_r($css);
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
print_r($errors);
print_r($fontcolortheme);



