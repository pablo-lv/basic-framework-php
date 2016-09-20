<?php

namespace app\Controllers\Admin;

/**
 * Home Controller
 *
 * PHP version 5.6
 */
class Users extends \Core\Controller
{
    /**
     * Before filter
     * @return void
     */
    protected function before()
    {
        echo "(before)";
        // return false;
    }

    /**
     * Show the index page.
     * @return void
     */
    public function indexAction()
    {
        echo "Hello from the index action in the User controller.";
    }

    /**
     * After filter
     * @return void
     */
    protected function after()
    {
        echo " (after)";
    }
}
