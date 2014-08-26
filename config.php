<?php

// use this config file to overwrite the defaults from default_config.php
// or to make local config changes.
$config = array();


$config['site_title']     = 'Besutra'; // Site title
$config['pages_order_by'] = 'date'; // Order pages by "title" (alpha) or "date"

// run the generator.php file or fill this with a long string
// must not be empty
$config['encryptionKey'] = 'KUW54q5LkHsJ]IZi)FmsXPb[j|F}}NxV=n=rXBp3ao5YwE{e/|gPCj8z9?hwNy=R';

$config['plugins'] = array(
        'phileDemoPlugin'                => array('active' => false),
        'phileParserMarkdown'            => array('active' => true), // the default parser
        'phileParserMeta'                => array('active' => true), // the default parser
        'phileTemplateTwig'              => array('active' => true), // the default template engine
        'philePhpFastCache'              => array('active' => false), // the default cache engine
        'phileSimpleFileDataPersistence' => array('active' => false), // the default data storage engine
);

// it is important to return the $config array!
return $config;
