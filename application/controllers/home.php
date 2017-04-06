<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zuolinux.com
 * Date: 2017/1/11
 * Time: 11:22
 */

class Home extends CI_Controller{
    public function index(){

        $file_list=array();

        foreach( glob(SAVE_PATH . "*") as $filename ){

            array_push($file_list, array(str_replace(SAVE_PATH, "", $filename), filesize($filename)));

        }

        $data['file_list'] = $file_list;

        $this->load->view('home', $data);
    }
}