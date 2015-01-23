<?php

class SF9_Seo_Block_Adminhtml_Page extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_page';
        $this->_blockGroup = 'seo';
        $this->_headerText = Mage::helper('seo')->__('Page SEO');
        parent::__construct();
        $this->removeButton('add');
    }
}