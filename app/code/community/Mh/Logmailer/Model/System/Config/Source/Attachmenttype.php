<?php
/**
 * Matthias Haupt
 * www.matthias-haupt.net
 *
 * @category   ${category}
 * @package    ${Package}
 * @author     Matthias Haupt matthias@matthias-haupt.net
 * @date       03.04.14
 * @license    MIT http://opensource.org/licenses/mit-license.php 
 */

/**
 * backend model for setting up the attachment types compressed and plain text
 *
 * Class Mh_Logmailer_Model_System_Config_Source_Attachmenttype
 */
class Mh_Logmailer_Model_System_Config_Source_Attachmenttype
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 1,
                'label' => Mage::helper('logmailer')->__('COMPRESSED')
            ),
            array(
                'value' => 0,
                'label' => Mage::helper('logmailer')->__('PLAIN_TEXT')
            ),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            0 => Mage::helper('logmailer')->__('COMPRESSED'),
            1 => Mage::helper('logmailer')->__('PLAIN_TEXT'),
        );
    }
} 