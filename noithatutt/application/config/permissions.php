<?php
$config = array(
	'admin'   => array('index','add','edit','delete'),
	'catalog' => array('index','add','edit','delete','delete_all'),
	'contact' => array('index','delete','delete_all'),
	'slide'   => array('index','add','edit','delete','delete_all','view'),
	'news'    => array('index','add','edit','delete','delete_all', 'view'),
	'product' => array('index','add','edit','delete','delete_all','view'),
	'user'    => array('index','add','edit','delete'),
	'order'   => array('index', 'export'),
	'transaction' => array('index', 'export', 'view' ,'active', 'cancel'),
);
