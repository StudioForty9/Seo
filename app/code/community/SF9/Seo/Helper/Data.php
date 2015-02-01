<?php

class SF9_Seo_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function canShowUrlKey()
    {
        return Mage::getStoreConfigFlag('seo/general/show_url_key');
    }
}
