<?php

class SF9_Seo_Block_Adminhtml_Widget_Grid_Column_Renderer_Inline_Select
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $html = '<select name="' . $this->getColumn()->getId() . '" ';
        $html .= 'tabindex="' . $this->getColumn()->getTabIndex() . '" ';
        $html .= 'class="' . $this->getColumn()->getInlineCss() . '"';
        $html .= 'data-id="' . $row->getId() . '">';

        $source = Mage::getModel($this->getColumn()->getSource());
        foreach ($source->getAllOptions() as $option) {
            $selected = false;

            if ($option['value'] == $row->getData($this->getColumn()->getIndex())) {
                $selected = true;
            }
            $html .= '<option value="' . $option['label'] . '"';
            if($selected){
                $html .= 'selected="' . $selected . '"';
            }
            $html .= '>' . $option['value'] . '</option>';
        }

        $html .= '</select>';

        return $html;
    }

}