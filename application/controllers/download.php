<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zuolinux.com
 * Date: 2017/1/11
 * Time: 11:27
 */

class Download extends CI_Controller{


    public function index(){

        $this->load->helper('url');

        $url = $this->input->post("url");
        $this->get_file($url, SAVE_PATH);
        //$this->load->view("home");
        redirect('http://www.lxdl.tk/', 'location');

    }

    //下载文件的方法
    private function get_file( $url, $save_path, $timeout = 5 ){
        if (!file_exists($save_path) && !mkdir($save_path, 0777, true)) {
            return false;
        }

        //指定临时存储的文件名
        $tmp_filename = SAVE_PATH . "/" . time() . "_" . mt_rand();
        $fp = fopen($tmp_filename, "w");

        $ch = curl_init();     //初始化一个cURL句柄
        curl_setopt($ch, CURLOPT_URL, $url);     //设置要抓取的URL
        //curl_setopt($ch, CURLOPT_HEADER, 1);     //设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);  //设置将结果保存到字符串中还是输出到屏幕上，TRUE表示将获取的信息以字符串返回，而不是直接输出
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);    //尝试连接时等待的秒数，设置为0则无限等待
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);  //TRUE为抓取 301/302 跳转后的页面

        curl_setopt($ch, CURLOPT_FILE, $fp);    //设置文件保存位置，默认是浏览器STDOUT

        curl_exec($ch);     //运行cURL，发送请求

        fclose($fp);

        //获取下载资源的大小
        $filesize = curl_getinfo($ch, CURLINFO_SIZE_DOWNLOAD);
        if($filesize > 11088206){
            echo "file size large 10M";
            exit;
        }

        //获取下载资源的文件名
        $filename1 = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        $tmp1 = strrchr(parse_url($filename1, PHP_URL_PATH), "/");
        $filename = str_replace("/", "", $tmp1);

        //修改临时文件名为下载资源的文件名
        //chmod($tmp_filename, 0777);
        //rename($tmp_filename, SAVE_PATH . $filename);

        curl_close($ch);



    }
}
