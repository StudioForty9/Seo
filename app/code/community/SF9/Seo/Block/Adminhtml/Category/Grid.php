<?php

class SF9_Seo_Block_Adminhtml_Category_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('seoGrid');
        //$this->setDefaultSort('seo_id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);

    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('catalog/category')->getCollection()
            ->addAttributeToSelect(array('name', 'meta_title', 'meta_description', 'meta_robots', 'url_key'));

        if($store = $this->getRequest()->getParam('store')){
            $collection->setStore($store);
            $collection->addAttributeToFilter('is_active', 1);
        }

        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $this->addColumn('name',
            array(
                'header' => Mage::helper('seo')->__('Category Name'),
                'align' => 'left',
                'index' => 'name'
            )
        );

        $this->addColumn('meta_title',
            array(
                'header' => Mage::helper('seo')->__('Meta Title'),
                'align' => 'left',
                'index' => 'meta_title',
                'renderer' => 'seo/adminhtml_widget_grid_column_renderer_inline',
                'inline_css' => 'validate-length maximum-length-75',
                'tab_index' => 1
            )
        );

        $this->addColumn('meta_description',
            array(
                'header' => Mage::helper('seo')->__('Meta Description'),
                'align' => 'left',
                'index' => 'meta_description',
                'renderer' => 'seo/adminhtml_widget_grid_column_renderer_inline_textarea',
                'inline_css' => 'validate-length maximum-length-160',
                'tab_index' => 2
            )
        );

        $this->addColumn('meta_robots',
            array(
                'header' => Mage::helper('seo')->__('Meta Robots'),
                'align' => 'left',
                'index' => 'meta_robots',
                'renderer' => 'seo/adminhtml_widget_grid_column_renderer_inline_select',
                'source' => 'seo/source_robots',
                'tab_index' => 3,
            )
        );

        if(Mage::helper('seo')->canShowUrlKey()) {
            $this->addColumn('url_key',
                array(
                    'header' => Mage::helper('seo')->__('URL Key'),
                    'align' => 'left',
                    'index' => 'url_key',
                    'renderer' => 'seo/adminhtml_widget_grid_column_renderer_inline',
                    'inline_css' => '',
                    'tab_index' => 4
                )
            );
        }

//        $this->addColumn('action',
//            array(
//                'header'    =>  Mage::helper('seo')->__('Action'),
//                'width'     => '100',
//                'type'      => 'action',
//                'getter'    => 'getId',
//                'actions'   => array(
//                    array(
//                        'caption'   => Mage::helper('seo')->__('delete'),
//                        'url'       => array('base'=> '*/*/delete'),
//                       'field'     => 'id'
//                    )
//                ),
//                'filter'    => false,
//                'sortable'  => false,
//                'index'     => 'stores',
//                'is_system' => true,
//        ));

        return parent::_prepareColumns();
    }


    protected function _prepareMassaction()
    {
        return $this;
    }


}
