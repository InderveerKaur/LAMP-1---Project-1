<?php
/**
* Kaur\Form\Fields\Views
*/
namespace Kaur\Form\Fields\Views
{
/**
* @ignore
*/
defined('IN_LIBRARY') or exit;

    /**
* Text
*
* Class used to present <input type="text" />
*/
class Text extends Input
{
        /**
* __construct
*
* @access public
* @param string Contains the name="" value for this element.
* @return void
*/
        public function __construct($name = '')
        {
            parent::__construct('text', $name);
        }
        
        /**
* @see Input::defaultAttributes
*
* Adds specific attributes for the <input /> with type="" value of text.
*/
        protected function defaultAttributes()
        {
            return array_merge(parent::defaultAttributes(), array(
                'maxlength' => '',
                'size' => ''
            ));
        }
}

}