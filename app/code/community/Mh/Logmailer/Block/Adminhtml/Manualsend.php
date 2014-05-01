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
 * block class to render a button with a connected action to send mails manually
 *
 * Class Mh_Logmailer_Block_Adminhtml_Manualsend
 */
class Mh_Logmailer_Block_Adminhtml_Manualsend extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /**
     * implement html render method for creating a button with a url to call
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setElement($element);
        $url = $this->getUrl('logmailer/adminhtml_manualsend/send');

        $html = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setType('button')
            ->setClass('scalable')
            ->setLabel($this->__('MANUALLY_SEND_NOW'))
            ->setOnClick("setLocation('$url')")
            ->toHtml();

        return $html;
    }
} 