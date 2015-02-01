<?php

class SF9_Seo_Block_Adminhtml_Widget_Grid_Column_Renderer_Inline_Textarea
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Input
{
    public function render(Varien_Object $row)
    {
        $html = '<textarea ';
        $html .= 'name="' . $this->getColumn()->getId() . '" ';
        $html .= 'tabindex="' . $this->getColumn()->getTabIndex() . '" ';
        $html .= 'data-id="' . $row->getId()  . '"';
        $html .= 'cols="40" rows="5"';
        $html .= 'class="input-text ' . $this->getColumn()->getInlineCss() . '">';
        $html .= $row->getData($this->getColumn()->getIndex()) . '</textarea>';
        return $html;
    }

}