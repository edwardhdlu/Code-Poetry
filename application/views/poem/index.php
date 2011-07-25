<?php

echo Form::open('poem/submit');

echo Form::label('name', 'Your Name, Please:');
echo Form::text('name');

echo "<br /> \n";

echo Form::label('poem', 'Your Code Poetry:');
echo Form::textarea('poem');

echo "<br /> \n";

echo Form::button('Send it In!');

echo Form::close();

?>