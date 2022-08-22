<?php
/**
 * Copyright © Pineapple, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Pineapple\ReportError\Block;

use Magento\Framework\View\Element\Template;

class ReportError extends Template
{
    /**
     * @return string
     */
    public function getFormActionUrl()
    {
        return $this->getUrl('reporterror/report/send', ['_secure' => true]);
    }
}
