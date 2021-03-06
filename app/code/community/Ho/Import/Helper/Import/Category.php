<?php
/**
 * Ho_Import
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Ho
 * @package     Ho_Import
 * @copyright   Copyright © 2012 H&O (http://www.h-o.nl/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author      Paul Hachmang – H&O <info@h-o.nl>
 *
 *
 */
class Ho_Import_Helper_Import_Category extends Ho_Import_Helper_Import
{
    /**
     * Generate an URL-key from multiple fields
     *
     * @param        $line
     * @param        $fields
     * @param string $glue
     * @param string $suffix
     *
     * @return string
     */
    public function getUrlKey($line, $fields, $glue = '-', $suffix = '')
    {
        $string = Mage::helper('ho_import/import')->getFieldCombine($line, $fields, $glue, $suffix);
        return Mage::getSingleton('catalog/product')->formatUrlKey($string).$suffix;
    }
}
