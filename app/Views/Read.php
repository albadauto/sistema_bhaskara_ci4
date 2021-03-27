<?php

$table = new \CodeIgniter\View\Table();
$table->setHeading('id', 'A', 'B', 'C', 'Delta' ,'Result', 'Result2');
$template = array(
    'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
);
$table->setTemplate($template);
echo $table->generate($procura_tudo);
