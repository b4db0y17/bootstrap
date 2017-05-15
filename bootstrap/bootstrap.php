<?php

include_once 'resources/head.php';
include_once 'resources/page.php';

class bootstrap {

    function __construct(){

        $this->head = new head();
        $this->page = new page();

    }

    function createPage(){

        $title = $this->head->getTitle();
        $styles = $this->head->getStyles();

        $page = $this->page->getPage($title, $styles);

        echo $page;

    }

}