<?php

class B2B_Blacklist_Helper_Data extends Mage_Core_Helper_Abstract {


    /**
    * @return Mage_Customer_Model_Session
    */

    private function _getCustomerSession()
    {
        return Mage::getSingleton('customer/session');
    }



    /**
     * @return int
     */

    private function _getBlacklistConfig()
    {
        return Mage::getStoreConfig('blacklist/settings/group');
    }

    /**
     * @return bool
     */

    public function checkCustomerBlackList(){

        $customerGroup=$this->_getCustomerSession()->getCustomerGroupId();

        $blackListGroup=$this->_getBlacklistConfig();

        return $customerGroup==$blackListGroup;

    }

    /**
     * @param Mage_Customer_Model_Group $customerGroup
     *
     * @return bool
     */

    public function checkGroupBlackList($customerGroup){

        $customerGroupId=$customerGroup->getId();

        $blackListGroup=$this->_getBlacklistConfig();

        return $customerGroup==$blackListGroup;

    }

}
