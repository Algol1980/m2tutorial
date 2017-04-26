<?php
/**
 * Created by PhpStorm.
 * User: dev01
 * Date: 30.12.16
 * Time: 16:26
 */

namespace Tutorial\News\Block;

class Index extends \Magento\Framework\View\Element\Template
{

    /**
     * @return \Magento\Framework\App\State
     */
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data)
    {
        parent::__construct($context, $data);
    }

    protected function _prepareLayout()
    {
        $this->setText('Testing');
        var_dump($this);
    }
}