<?php

class SF9_Seo_Model_Observer extends Varien_Event_Observer
{
    public function coreBlockAbstractToHtmlBefore($observer)
    {
        $block = $observer->getBlock();
        if($block->getNameInLayout() == 'head'){
            if($product = Mage::registry('product')){
                if($robots = $product->getMetaRobots()){
                    $block->setRobots($robots);
                    return;
                }
            }

            if($category = Mage::registry('current_category')){
                if($robots = $category->getMetaRobots()){
                    $block->setRobots($robots);
                    return;
                }
            }
        }
    }

    public function coreBlockAbstractPrepareLayoutBefore($observer)
    {
        $block = $observer->getBlock();
        if($block->getNameInLayout() == 'cms_page'){
            $page = $block->getPage();
            $head = $block->getLayout()->getBlock('head');
            if($head){
                $head->setRobots($page->getMetaRobots());
            }
        }

    }
}