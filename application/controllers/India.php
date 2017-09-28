<?php
/**
 * Created by PhpStorm.
 * User: vincentlee
 * Date: 2017-09-28
 * Time: 1:31 PM
 */
class India extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // References an image in public directory
        $source = './assets/images/logo.png';

        // set the mime type for that image (jpeg, png, etc)
        header("Content-type: image/png");
        header('Content-Disposition: inline');
        readfile($source); // dish it
    }
}