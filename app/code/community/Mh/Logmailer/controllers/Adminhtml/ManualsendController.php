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
 * controller for sending mails manually
 *
 * Class Mh_Logmailer_ManualsendController
 */
class Mh_Logmailer_Adminhtml_ManualsendController extends Mage_Adminhtml_Controller_Action
{
    /**
     * implemented access restrictions by acl
     *
     * @return bool|void
     */
    protected function _isAllowed()
    {
        // TODO
        return true;
    }

    /**
     * controller action to send a log mail manually
     */
    public function sendAction()
    {
        // TODO
        exit('send');
    }
} 