<?php
/**
 * Created by PhpStorm.
 * User: v_frli
 * Date: 2015/7/1
 * Time: 9:45
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->init();
    }

    private function init(){
        admin_is_login();
    }

    protected function showLoginView($params=array(), $data){
        $this->load->view('templates/header',$data);
        foreach($params as $item){
            $this->load->view();
        }
        $this->load->view('templates/header',$data);
    }
}