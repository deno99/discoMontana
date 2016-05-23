<!-- menu element, its included in default.ctp therefore present on all pages -->

<?php
echo $this->Html->link(
    'Dashboard',
    '/pages/home',
    array('class' => 'menu_button'));


echo $this->Html->link(
    'Events',
    '/events/index',
    array('class' => 'menu_button'));

echo $this->Html->link(
        'Floors',
        '/floors/index',
        array('class' => 'menu_button'));

?>
