<?php
/**
 * Created by PhpStorm.
 * User: dev01
 * Date: 26.04.17
 * Time: 16:35
 */

namespace Tutorial\News\Plugin;


class ChangecopyrightPlugin
{
    public function afterGetCopyright (\Magento\Theme\Block\Html\Footer $subject, $result) {
        $result = 'My Web4pro Copyright';
        return $result;
    }
}