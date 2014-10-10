<?php
namespace Plugin\HelloWorldWidget\Widget\MyWidget;

class Controller extends \Ip\WidgetController
{
    public function getTitle()
    {
        return __('My widget', 'ipAdmin');
    }
}