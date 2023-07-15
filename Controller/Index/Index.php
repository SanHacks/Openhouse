<?php
/*
 * *
 *  * Copyright © Gundo Sifhufhi. All rights reserved.
 *  * See Github_Sanhacks.txt for license details.
 *
 */

namespace Gundo\OpenHouse\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected PageFactory $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute(): Page|ResultInterface|ResponseInterface
    {
        return $this->resultPageFactory->create();
    }
}
