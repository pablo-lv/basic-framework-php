<?php

namespace app;

/**
 * Application configuration
 *
 * PHP version 5.6
 */
class Config
{
    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'framework';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'root';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'secret';

    /**
    * Show or hide error messages on screen
    * @var boolean
    */
   const SHOW_ERRORS = false;

}
