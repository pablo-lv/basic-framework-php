<?php

namespace app\Controllers;

use \Core\View;

/**
 * Home Controller
 *
 * PHP version 5.6
 */
class Home extends \Core\Controller
{
    /**
     * Before filter
     * @return void
     */
    protected function before()
    {
        // echo "(before)";
        // return false;
    }

    /**
     * After filter
     * @return void
     */
    protected function after()
    {
        // echo " (after)";
    }

    /**
     * Show the index page.
     * @return void
     */
    public function indexAction()
    {
        // echo "Hello from the index action in the Home controller.";
        // View::render('Home/index.php', [
        //     'name' => '<script>alert("hola")</script>',
        //     'colours' => ['red' , 'green' , 'blue']
        // ]);
        View::renderTemplate('Home/index.html', [
            'name' => '<script>alert("hola")</script>',
            'colours' => ['red' , 'green' , 'blue']
        ]);
    }
}
