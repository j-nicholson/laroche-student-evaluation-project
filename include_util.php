<?php
    class AutoLoader {
        public static function ClassLoader($class) {
            $path = '/Users/johnnynicholson/Applications/XAMPP/xamppfiles/htdocs/Cap_dev_sprint/';
            include $path . $class . '.php';
        }
    }
?>