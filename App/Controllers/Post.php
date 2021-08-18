<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Post extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    

    public function indexAction()
    {
        View::renderTemplate('Home/Post.html');
    }
    public function ver()
    {
      
        View::render('Home/dados.php', [
        	'usuarios' => \App\Models\User::getAll("1"),
		    'name'    => 'Dave',
		    'colours' => ['red', 'green', 'blue']
		]);
    }

    public function saber()
    {

        $id = $this->route_params['id'];
        $slug = $this->route_params['slug'];


        View::render('Home/saber.php', [
            'id'      => $id,
            'slug'    => $slug,
        ]);
    }
}
