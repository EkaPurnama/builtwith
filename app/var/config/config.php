<?php

return new \Phalcon\Config(array(
    'application' => array(
        'cdnUrl'         => 'http://builtwith-1618.kxcdn.com',
        'controllersDir' => ROOT_PATH . '/app/controllers/',
        'modelsDir'      => ROOT_PATH . '/app/models/',
        'viewsDir'       => ROOT_PATH . '/app/views/',
        'varDir'         => ROOT_PATH . '/app/var/',
        'cacheDir'       => ROOT_PATH . '/app/var/cache/',
        'baseUri'        => '/',
    )
));
