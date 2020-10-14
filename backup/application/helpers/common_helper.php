<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('_d') ){
    function _d($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
}

if ( ! function_exists('_j') ){
    function _j($content){
        header('Content-Type: application/json');
        echo json_encode($content);
    }
}

if ( ! function_exists('_p') ){
    function _p($arr){
    	echo '<p>';
        print_r($arr);
        echo '</p>';
    }
}
