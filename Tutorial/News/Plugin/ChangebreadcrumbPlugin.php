<?php
/**
 * Created by PhpStorm.
 * User: dev01
 * Date: 26.04.17
 * Time: 16:35
 */

namespace Tutorial\News\Plugin;


class ChangebreadcrumbPlugin
{
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        $crumbInfo['label'] = $crumbInfo['label'] . '!!!';
        $crumbInfo['title'] = $crumbInfo['title'] . '!!!';

        return array($crumbName, $crumbInfo);
    }
}