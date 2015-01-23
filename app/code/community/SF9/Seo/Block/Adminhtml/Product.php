<?php

class SF9_Seo_Block_Adminhtml_Product extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_product';
        $this->_blockGroup = 'seo';
        $this->_headerText = Mage::helper('seo')->__('Product SEO');
        parent::__construct();
        $this->removeButton('add');
    }
}