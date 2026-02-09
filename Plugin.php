<?php

namespace Kanboard\Plugin\ScrollableColumns;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array('template' => 'plugins/ScrollableColumns/Assets/css/style.css'));
    }

    public function getPluginName()
    {
        return 'Scrollable Columns';
    }

    public function getPluginDescription()
    {
        return 'Make Kanboard columns scrollable independently when there are too many tasks.';
    }

    public function getPluginAuthor()
    {
        return 'laimeilleurzamis';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return '';
    }
}