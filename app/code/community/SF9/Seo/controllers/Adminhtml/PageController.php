<?php

class SF9_Seo_Adminhtml_PageController extends Mage_Adminhtml_Controller_action
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
        $grid = $this->getLayout()->createBlock('seo/adminhtml_page', 'page.seo');
        $content = $this->getLayout()->getBlock('content');
        $content->append($grid);
        $this->renderLayout();
    }

    public function updateMetaTitleAction()
    {
        $fieldId = (int) $this->getRequest()->getParam('id');
        $title = $this->getRequest()->getParam('title');
        if ($fieldId) {
            $page = Mage::getModel('cms/page')->load($fieldId);
            $page->setData('title', $title)->save();
        }
    }

    public function updateMetaDescriptionAction()
    {
        $fieldId = (int) $this->getRequest()->getParam('id');
        $title = $this->getRequest()->getParam('description');
        if ($fieldId) {
            $page = Mage::getModel('cms/page')->load($fieldId);
            $page->setData('meta_description', $title)->save();
        }
    }

    public function updateMetaRobotsAction()
    {
        $fieldId = (int) $this->getRequest()->getParam('id');
        $title = $this->getRequest()->getParam('robots');
        if ($fieldId) {
            $page = Mage::getModel('cms/page')->load($fieldId);
            $page->setData('meta_robots', $title)->save();
        }
    }

    public function updateUrlKeyAction()
    {
        $fieldId = (int) $this->getRequest()->getParam('id');
        $title = $this->getRequest()->getParam('url');
        if ($fieldId) {
            $page = Mage::getModel('cms/page')->load($fieldId);
            $page->setData('identifier', $title)->save();
        }
    }
}