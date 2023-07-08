<?php
/*
 * *
 *  * Copyright © Gundo Sifhufhi. All rights reserved.
 *  * See Github_Sanhacks.txt for license details.
 *
 */

namespace Gundo\Openhouse\Block;


use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\Category;

class Image extends Template
{
    protected Category $category;

    public function __construct(
        Template\Context $context,
        Category $category,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->category = $category;
    }

    /**
     * @throws LocalizedException
     */
    public function getCategoryImageUrl(): bool|string
    {
        // Get the current category ID
        $categoryId = $this->getRequest()->getParam('id');

        // Load the category by ID
        $category = $this->category->load($categoryId);

        // Return the image URL if it exists, otherwise return a default image URL
        if ($category->getImageUrl()) {
            return $category->getImageUrl();
        } else {
            return $this->getViewFileUrl('images/default_image.jpg');
        }
    }
}

