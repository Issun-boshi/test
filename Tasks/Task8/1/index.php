<?php

$page = file_get_contents('template.html');

$page = str_replace('{page_title}', 'Welcome', $page);

$page = str_replace('{name}', 'Chaika', $page);

file_put_contents('new page.html', $page);
print $page;
