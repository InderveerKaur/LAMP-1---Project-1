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
* Select
*/
class Select extends \Kaur\HTML\Views\Element
{
        /**
* __construct
*
* @access public
* @param string Contains the name of the <Select /> element.
* @param array Contains an array of Option elements
* to be used as children.
* @return void
*/
        public function __construct($name = '', array $options = array())
        {
            parent::__construct('select');
            
            $this->attrName($name);

foreach( $options as $option ) {
$this->addChild($option);
}
        }

public function addChild(\Kaur\HTML\Views\Element $option)
{
if( !($option instanceof Option) ) {
throw new \Exception('You can only add children of type Option');
}

return parent::addChild($option);
}

public function removeChild(\Kaur\HTML\Views\Element $option)
{
if( !($option instanceof Option) ) {
throw new \Exception('Only children of type Option exist, therefore, you cannot remove the specified type.');
}

return parent::removeChild($option);
}
        
        /**
* attrName
*
* Accessor/setter for the name="" attribute.
*
* @access public
* @param mixed
* @return mixed
*/
        final public function attrName($value = null)
        {
            if( null === $value ) {
                return isset($this->_attributes['name']) ? $this->_attributes['type'] : '';
            }
            
            $this->_attributes['name'] = trim($value);
            return $this;
        }
        
        /**
* @see Element::defaultAttribtues
*/
        protected function defaultAttributes()
        {
            return array_merge(parent::defaultAttributes(), array(
                'name' => '',
'size' => '',
'multiple' => '',
'autofocus' => '',
'disabled' => '',
'form' => ''
            ));
        }
}
}