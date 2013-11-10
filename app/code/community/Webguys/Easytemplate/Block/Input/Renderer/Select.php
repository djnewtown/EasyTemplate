<?php

class Webguys_Easytemplate_Block_Input_Renderer_Select extends Webguys_Easytemplate_Block_Input_Renderer_Abstract
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('easytemplate/input/renderer/select.phtml');
    }

    public function getOptionValues()
    {
        /** @var $source Webguys_Easytemplate_Model_Input_Renderer_Source_Abstract */
        $source = $this->getSource();
        return ($source) ? $source->getOptionValues() : false;
    }
}