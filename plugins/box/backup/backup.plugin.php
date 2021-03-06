<?php

    /**
     *	Backup plugin
     *
     *	@package Monstra
     *  @subpackage Plugins
     *	@author Romanenko Sergey / Awilum
     *	@copyright 2012 Romanenko Sergey / Awilum
     *	@version 1.0.0
     *
     */     
     

    // Register plugin
    Plugin::register( __FILE__,                    
                    __('Backup', 'backup'),
                    __('Backup manager', 'backup'),  
                    '1.0.0',
                    'Awilum',                 
                    'http://monstra.org/',
                    null,
                    'box');



    if (Session::exists('user_role') && in_array(Session::get('user_role'), array('admin'))) {

        Navigation::add(__('Backups', 'backup'), 'system', 'backup', 3);

        // Include Backup Admin
        Plugin::admin('backup', 'box');
      
    }