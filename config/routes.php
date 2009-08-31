<?php
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
Router::connect('/admin', array('admin' => true, 'plugin' => 'users', 'controller' => 'users', 'action' => 'home'));

// These routes should work automatically, as the controller name is the same as the plugin name. For some reason it doesn't, though, so needs to be forced. 
Router::connect('/admin/users/:action/*', array('plugin' => 'users', 'admin' => true, 'controller' => 'users'));
Router::connect('/admin/articles/:action/*', array('plugin' => 'articles', 'admin' => true, 'controller' => 'articles'));
?>
