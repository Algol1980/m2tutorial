<?php
/**
 * Created by PhpStorm.
 * User: dev01
 * Date: 26.04.17
 * Time: 16:35
 */

namespace Tutorial\News\Plugin;


class NewpricePlugin
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result) {
        $key = $result;
        $valule = $subject;

        return $result+=10;
    }

}