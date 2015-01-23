<?php

class SF9_Seo_Model_Resource_Setup extends Mage_Core_Model_Resource_Setup
{
    public function setDefaultSeoConfiguration()
    {
        $config = Mage::app()->getConfig();

        //Meta Information in <head>
        $config->saveConfig('design/head/default_title', '', 'default', '0');

        if(Mage::getStoreConfig('design/head/default_description') == 'Default Description'){
            $config->saveConfig('design/head/default_description', '', 'default', '0');
        }

        if(Mage::getStoreConfig('design/head/default_description')
            == 'Magento, Varien, E-commerce'){
            $config->saveConfig('design/head/default_keywords', '', 'default', '0');
        }

        //Category Settings
        if(Mage::getStoreConfig('catalog/seo/product_url_suffix') == '.html'){
            $config->saveConfig('catalog/seo/product_url_suffix', '', 'default', '0');
        }

        if(Mage::getStoreConfig('catalog/seo/category_url_suffix') == '.html'){
            $config->saveConfig('catalog/seo/category_url_suffix', '', 'default', '0');
        }

        $config->saveConfig('catalog/seo/product_use_categories', '0', 'default', '0');
        $config->saveConfig('catalog/seo/product_canonical_url', '1', 'default', '0');
        $config->saveConfig('catalog/seo/category_canonical_url', '1', 'default', '0');

        $config->reinit();
    }
}