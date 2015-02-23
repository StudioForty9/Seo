<?php

class SF9_Seo_Block_Adminhtml_Page_Grid extends Mage_Adminhtml_Block_Widget_Grid
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
        $collection = Mage::getModel('cms/page')->getCollection();

        if($store = $this->getRequest()->getParam('store')){
            $collection->addStoreFilter($store);
        }

        $this->setCollection($collection);
        return parent::_prepareCollection();

    }

    protected function _prepareColumns()
    {

        $this->addColumn('meta_title',
            array(
                'header' => Mage::helper('seo')->__('Meta Title'),
                'align' => 'left',
                'index' => 'title',
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
                'tab_index' => 3
            )
        );

        if(Mage::helper('seo')->canShowUrlKey()) {
            $this->addColumn('url_key',
                array(
                    'header' => Mage::helper('seo')->__('URL Key'),
                    'align' => 'left',
                    'index' => 'identifier',
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
