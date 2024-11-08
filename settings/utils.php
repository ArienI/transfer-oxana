<?php
class Config {
    static function get_phrase($id) {
        $dict = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/settings/translations.json'), true);

        $lang = $_SESSION['lang'];

        if(isset($dict[$id]) && $dict[$id][$lang]) {
            return $dict[$id][$lang];
        }
        else {
            return $id;
        }
    }
}

function set_user_lang () {
    if(isset($_GET['lang'])) {
        $_SESSION['lang'] = trim(strip_tags($_GET['lang']));
        $date = time() + 30*24*60*60;
        setcookie( 'lang', trim( strip_tags( $_GET['lang'] ) ), $date, '/' );
    }
    else if (isset($_COOKIE['lang'])) {
        $_SESSION['lang'] = $_COOKIE['lang'];
    }
    else {
        $_SESSION['lang'] = 'sr';
    }
}