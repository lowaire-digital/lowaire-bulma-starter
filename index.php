<?php

    namespace Theme\Index;

    /*
	|------------------------------------------------------------------
	| Index Controller
	|------------------------------------------------------------------
	|
	| Think about theme template files as some sort of controllers
	| from MVC design pattern. They should link application
	| logic with your theme view pages files.
	|
	*/

    $context           = \Timber::get_context();
    $post              = \Timber::query_post();
    $context[ 'post' ] = $post;
    /**
     * Renders index page.
     *
     * @see resources/pages/index.twig
     */
    \Timber::render( 'index.twig', $context );
