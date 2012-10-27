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
* Email
*/
class Email extends Input
{
/**
* __construct
*
* @access public
* @param string Contains the name of this field.
* @return void
*/
        public function __construct($name = '')
        {
            parent::__construct('email', $name);
        }
        
/**
* @see Input::defaultAttributes
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