<?php

$installer = new Mage_Eav_Model_Entity_Setup('core_setup');

$installer->startSetup();

$installer->addAttribute('catalog_category', 'h1', array(
    'group'         => 'General Information',
    'input'         => 'text',
    'type'          => 'varchar',
    'label'         => 'H1',
    'backend'       => '',
    'source'        => '',
    'frontend_class' => '',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$installer->addAttribute('catalog_category', 'meta_robots', array(
    'group'         => 'General Information',
    'input'         => 'select',
    'type'          => 'varchar',
    'label'         => 'Robots',
    'backend'       => '',
    'source'        => '',
    'frontend_class' => '',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'source' => 'seo/source_robots'
));

$installer->addAttribute('catalog_product', 'meta_robots', array(
    'group'         => 'Meta Information',
    'input'         => 'select',
    'type'          => 'varchar',
    'label'         => 'Robots',
    'backend'       => '',
    'source'        => '',
    'frontend_class' => '',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'source' => 'seo/source_robots'
));

$installer->getConnection()->addColumn($installer->getTable('cms_page'), 'meta_robots', 'text NOT NULL');

$installer->endSetup();