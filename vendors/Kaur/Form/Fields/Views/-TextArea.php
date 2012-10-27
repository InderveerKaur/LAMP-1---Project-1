<?php

namespace Kaur\Form\Fields\Views
{
defined('IN_LIBRARY') or exit;

class TextArea extends \Kaur\HTML\Views\Element
{
protected $_text = null;

public function __construct($text = '', $value = '')
{
parent::__construct('textarea');

$this->_text = new \Kaur\HTML\Views\Text($text);
$this->value($value);

$this->template_path(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR);
$this->template_file('textarea.tmpl.php');
}

// $option->text()->value('hello world');
public function text()
{
return $this->_text;
}

public function value($value = null)
{
if( null === $value ) {
if( isset($this->_attributes['value']) ) {
return $this->_attributes['value'];
}

return null;
}

$this->_attributes['value'] = $value;
return $this;
}

public function addChild(\Kaur\HTML\Views\Element $child)
{
throw new \Exception('Hey! You cannot use this method. The only child allowed is of type text and is handled internally. Use Option::text() method.');
}

public function removeChild(\Kaur\HTML\Views\Element $child)
{
throw new \Exception('Hey! You cannot use this method. The only child allowed is of type text and is handled internally. Use Option::text() method.');
}

protected function beforeRender()
{
/* We cheat here ... directly append _text onto _children
without enforcing the type */
$this->_children[] = $this->_text;

parent::beforeRender();
}

protected function defaultAttributes()
{
return array_merge(parent::defaultAttributes(), array(
'value' => ''
));
}
}

}