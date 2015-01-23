<?php

class SF9_Seo_Adminhtml_ProductController extends Mage_Adminhtml_Controller_action
{

    protected function _initAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('imaclean/items')
            ->_addBreadcrumb(Mage::helper('adminhtml')->__('Items Manager'),
                Mage::helper('adminhtml')->__('Item Manager'));

        return $this;
    }

    public function indexAction()
    {
        $this->_initAction();
        $grid = $this->getLayout()->createBlock('seo/adminhtml_product', 'product.seo');
        $content = $this->getLayout()->getBlock('content');
        $content->append($grid);
        $this->renderLayout();
    }

    public function updateMetaTitleAction()
    {
        $fieldId = (int) $this->getRequest()->getParam('id');
        $title = $this->getRequest()->getParam('title');
        $store = $this->getRequest()->getParam('store');
        if ($fieldId) {
            $product = Mage::getModel('catalog/product')->load($fieldId);
            $product->setStoreId($store);
            $product->setData('meta_title', $title)->getResource()->saveAttribute($product, 'meta_title');
        }
    }

    public function updateMetaDescriptionAction()
    {
        $fieldId = (int) $this->getRequest()->getParam('id');
        $title = $this->getRequest()->getParam('description');
        $store = $this->getRequest()->getParam('store');
        if ($fieldId) {
            $product = Mage::getModel('catalog/product')->load($fieldId);
            $product->setStoreId($store);
            $product->setData('meta_description', $title)->getResource()->saveAttribute($product, 'meta_description');
        }
    }

    public function updateMetaRobotsAction()
    {
        $fieldId = (int) $this->getRequest()->getParam('id');
        $title = $this->getRequest()->getParam('robots');
        $store = $this->getRequest()->getParam('store');
        if ($fieldId) {
            $product = Mage::getModel('catalog/product')->load($fieldId);
            $product->setStoreId($store);
            $product->setData('meta_robots', $title)->getResource()->saveAttribute($product, 'meta_robots');
        }
    }

    public function updateUrlKeyAction()
    {
        $fieldId = (int) $this->getRequest()->getParam('id');
        $title = $this->getRequest()->getParam('url');
        $store = $this->getRequest()->getParam('store');
        if ($fieldId) {
            $product = Mage::getModel('catalog/product')->load($fieldId);
            $product->setStoreId($store);
            $product->setData('url_key', $title)->getResource()->saveAttribute($product, 'url_key');
        }
    }
}