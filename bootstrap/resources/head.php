<?php

class head {

    function __construct(){

        $this->title = '';
        $this->styles = array();

    }


    function Title($t){

        $this->title = $t;

    }

    function stylesheet($sheet){

        array_push($this->styles, $sheet);

    }

    function stylesheets($sheets){

        for($i = 0; $i < count($sheets); $i++){

            array_push($this->styles, $sheets[$i]);

        }

    }

    function getTitle(){

        return $this->title;

    }

    function getStyles()
    {

        $code = '';

        for ($i = 0; $i < count($this->styles); $i++) {

            $style = '<link href="'.$this->styles[$i].'" rel="stylesheet" type="text/css">';

            $code .= $style;
        }

        return $code;

    }

}
