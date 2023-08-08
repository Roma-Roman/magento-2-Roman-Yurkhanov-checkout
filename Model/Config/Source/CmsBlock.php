<?php
/**
 * Roman Yurkhanov
 *
 * Email :: ferrumdp@gmail.com
 * Linkedin :: https://www.linkedin.com/in/roman-yurkhanov-322035122/
 *
 * Copyright 2023-present Roman Yurkhanov. All rights reserved.
 * See license.txt for license details.
 */

namespace RomanYurkhanov\Checkout\Model\Config\Source;

use Magento\Cms\Model\BlockFactory;
use Magento\Framework\Option\ArrayInterface;

class CmsBlock implements ArrayInterface
{
    protected BlockFactory $blockFactory;

    public function __construct(
        BlockFactory $blockFactory
    )
    {
        $this->blockFactory = $blockFactory;
    }

    public function toOptionArray()
    {
        $options = [['value' => '', 'label' => __('-- Please Select CMS Block --')]];

        $blockCollection = $this->blockFactory->create()->getCollection();
        foreach ($blockCollection as $block) {
            $options[] = [
                'value' => $block->getIdentifier(),
                'label' => $block->getTitle(),
            ];
        }

        return $options;
    }
}
