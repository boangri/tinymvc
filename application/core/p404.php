<?php

namespace core;

class p404 extends controller
{
    function action_index()
    {
        $this->view->generate('404_view.php', 'template_view.php');
    }
}
