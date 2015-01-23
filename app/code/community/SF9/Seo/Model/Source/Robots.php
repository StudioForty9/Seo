<?php

class SF9_Seo_Model_Source_Robots extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    public function getAllOptions()

    {
        if (!$this->_options) {
            $this->_options = array(
                array(
                    'value' => 'INDEX,FOLLOW',
                    'label' => 'INDEX,FOLLOW',
                ),
                array(
                    'value' => 'INDEX,NOFOLLOW',
                    'label' => 'INDEX,NOFOLLOW',
                ),
                array(
                    'value' => 'NOINDEX,FOLLOW',
                    'label' => 'NOINDEX,FOLLOW',
                ),
                array(
                    'value' => 'NOINDEX,NOFOLLOW',
                    'label' => 'NOINDEX,NOFOLLOW',
                ),
                array(
                    'value' => 'INDEX,FOLLOW,NOARCHIVE',
                    'label' => 'INDEX,FOLLOW,NOARCHIVE',
                ),
                array(
                    'value' => 'INDEX,NOFOLLOW,NOARCHIVE',
                    'label' => 'INDEX,NOFOLLOW,NOARCHIVE',
                ),
                array(
                    'value' => 'NOINDEX,NOFOLLOW,NOARCHIVE',
                    'label' => 'NOINDEX,NOFOLLOW,NOARCHIVE',
                )
            );
        }
        return $this->_options;
    }
}