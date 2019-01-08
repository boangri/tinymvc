<?php
/**
 * Defines core functionality for controllers.
 * 
 * @link http://habrahabr.ru/post/150267/ article
 * @link http://tinymvc.ru/ deployed application
 * @copyright (c) 2013, John Doe
 * @license http://www.example.com/lic.html Borsetshire Open License 
 * @package core
 */

namespace core;
/**
 * Defines core functionality for controllers.
 *
 * @category    MVC
 * @package     core
 * @author John Doe <xinu@yandex.ru>
 */
abstract class controller {
    /** @var core_model */
    public $model;
    /** @var core_view */
    public $view;

    /** 
     * create core_view object 
     */
    function __construct()
    {
        $this->view = new \core\view();
        session_start();
    }

    /**
     * default action
     */
    //abstract function action_index();
}
