<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at dolor quam, non elementum turpis. Curabitur elementum orci nec orci lacinia vestibulum. Curabitur mi metus, feugiat sit amet placerat sit amet, gravida eget mi. In ut dolor vitae nibh euismod egestas.</p>

<h1>Example 1: Generic Form</h1>
<dl class="tabs">
    <dd class="active"><a href="#render">Example</a></dd>
    <dd><a href="#description">Description</a></dd>
    <dd><a href="#code">Code</a></dd>
</dl>

<ul class="tabs-content">
    <li class="active" id="renderTab">
        <?php print $form; ?>
</li>
<li id="descriptionTab">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at dolor quam, non elementum turpis. Curabitur elementum orci nec orci lacinia vestibulum. Curabitur mi metus, feugiat sit amet placerat sit amet, gravida eget mi. In ut dolor vitae nibh euismod egestas.</p>
</li>
<li id="codeTab">
<pre style="background-color: #f2f2f2; border: 1px solid #d2d2d2; overflow: scroll; width: 100%;">
&lt;?php
$form = new Kaur\Form\Views\Form();
$form->addChild( new \Kaur\Form\Fields\Views\Field('Name', new Kaur\Form\Fields\Views\Text('name') ) );
$form->addChild( new \Kaur\Form\Fields\Views\Field('Email', new Kaur\Form\Fields\Views\Email('email') ) );
$form->addChild( new \Kaur\Form\Fields\Views\Field('', new Kaur\Form\Fields\Views\Submit('submit', 'Send')) );

print $form;
</pre>
</li>
</ul>