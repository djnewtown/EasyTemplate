<?php

/**
 * Class Webguys_Easytemplate_Block_Input_Renderer_Abstract
 *
 * @method getCode
 * @method getLabel
 * @method getComment
 * @method getDefault
 * @method getRequired
 */
class Webguys_Easytemplate_Block_Input_Renderer_Abstract extends Mage_Core_Block_Template
{

    protected $_parent_parser_field = null;

    public function setParentParserField($field)
    {
        $this->_parent_parser_field = $field;
    }

}