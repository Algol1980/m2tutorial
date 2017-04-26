<?php
/**
 * Created by PhpStorm.
 * User: dev01
 * Date: 30.12.16
 * Time: 15:28
 */

namespace Tutorial\News\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $$resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {

        return $this->resultPageFactory->create();
    }

}