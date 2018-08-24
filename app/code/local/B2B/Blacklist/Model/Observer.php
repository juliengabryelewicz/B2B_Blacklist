<?php

class B2B_Blacklist_Model_Observer
{

    /**
     * @param Varien_Event_Observer $observer
     *
     * @return B2B_Blacklist_Model_Observer
     */

    public function checkCustomer($observer)
    {

        if(Mage::helper("blacklist")->checkCustomerBlackList()){
            Mage::getSingleton('core/session')->addError(Mage::getStoreConfig('blacklist/settings/text_alert'));
            Mage::app()->getResponse()->setRedirect(Mage::getUrl("/"));
            return;
        }

        return $this;
    }

}
