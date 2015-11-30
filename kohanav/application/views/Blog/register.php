<? if($error):?>
    <ul>
        <? foreach($error as $error): ?>
            <li><?= $error ?></li>
        <? endforeach; ?>
    </ul>
<? endif; ?>





<?php
//print_r(errors);

echo form::open();
echo form::label('fname','First Name');
echo form::input('fname');
echo '<br/>';
echo '<br/>';

echo form::label('lname','Last Name');
echo form::input('lname');
echo '<br/>';
echo '<br/>';

echo form::label('designation','Designation');
echo form::input('designation');
echo '<br/>';
echo '<br/>';

echo form::label('email','email id');
echo form::input('email');
echo '<br/>';
echo '<br/>';

echo form::label('pass','Password');
echo form::password('pass');
echo '<br/>';
echo '<br/>';


echo form::submit('submit','Submit');
echo form::close();
?>