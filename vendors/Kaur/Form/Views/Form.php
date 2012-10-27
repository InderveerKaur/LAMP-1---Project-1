<?php
/**
* Kaur\Form\Views
*/
namespace Kaur\Form\Views
{
/**
* @ignore
*/
defined('IN_LIBRARY') or exit;

/**
* Form
*/
class Form extends \Kaur\HTMl\Views\Element
{
/**
* __construct
*
* @access public
* @param string Contains the action="" attribute value.
* @param string Contains the method="" attribute value.
* @return void
*/
public function __construct($action = '', $method = 'POST')
{
parent::__construct('form');
}

public function addChild(\Kaur\HTML\Views\Element $field)
{
if( !($field instanceof \Kaur\Form\Fields\Views\Field) )
{
throw new \Exception('Only type \Kaur\Form\Fields\Views\Field can be added as a child of type Form.');
}

return parent::addChild($field);
}

public function removeChild(\Kaur\HTML\Views\Element $field)
{
if( !($field instanceof \Kaur\Form\Fields\Views\Field) )
{
throw new \Exception('Only type \Kaur\Form\Fields\Views\Field exist as children of type Form.');
}

return parent::removeChild($field);
}

protected function defaultAttributes()
{
return parent::defaultAttributes() + array(
'action' => '',
'method' => 'POST',
'name' => ''
);
}
}
}