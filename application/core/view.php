<?php
/**
 * Defines "core view" base class.
 * 
 * @link http://habrahabr.ru/post/150267/ article
 * @link http://tinymvc.ru/ deployed application
 * @copyright (c) 2013, John Doe
 * @license http://www.example.com/lic.html Borsetshire Open License 
 * @package core
 */
namespace core;
/**
 * Defines core functionality for views.
 *
 * @category    MVC
 * @package     core
 * @author John Doe <xinu@yandex.ru>
 */
class view
{
	
    //public $template_view; // здесь можно указать общий вид по умолчанию.

    /**
     * Output page content.
     * 
     * @var string $content_view - view which displays the content of the page
     * @var string $template_view common for all pages template
     * @var array $data Array of data for output. It usually is filled in in a model.
     */
    function generate($content_view, $template_view, $data = null)
    {
        /*
        if(is_array($data)) {
                // преобразуем элементы массива в переменные
                extract($data);
        }
        */

        /*
        динамически подключаем общий шаблон (вид),
        внутри которого будет встраиваться вид
        для отображения контента конкретной страницы.
        */
        include 'application/views/'.$template_view;
    }
}
