<?php

include_once 'head.php';

class page{

    function __construct(){



    }

    function getPage($title, $styles) {



        $page = '
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>'.$title.'</title>
    '.$styles.'
    </head>
<body>
</body>
</html>';

        return $page;

    }
}
?>