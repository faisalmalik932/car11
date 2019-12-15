<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Auth_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('admin_logged_in'))
        { 
            redirect(base_url('admin_login'));
        }
    }
}