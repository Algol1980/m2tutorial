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
    public function afterAddCrumb (\Magento\Theme\Block\Html\Breadcrumbs $subject, $result) {

        foreach ($this->_crumbs as $key => $value) {
            $this->_crumbs[$key] = $value . '!!';
        }

        return $this;
    }
}