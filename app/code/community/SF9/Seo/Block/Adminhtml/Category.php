<?php

class SF9_Seo_Block_Adminhtml_Category extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_category';
        $this->_blockGroup = 'seo';
        $this->_headerText = Mage::helper('seo')->__('Category SEO');
        parent::__construct();
        $this->removeButton('add');
    }
}