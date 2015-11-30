<h2>Login Page</h2>
<? if($errors):?>
    <ul>
        <? foreach($errors as $error): ?>
            <li><?= $error ?></li>
        <? endforeach; ?>
    </ul>
    <? endif; ?>

<?php

echo form::open();
   echo form::label('email','Email');
   echo form::input('email');

   echo form::label('pass','Password');
   echo form::password('pass');
echo form::submit('submit','Submit');
echo form::close();
?>