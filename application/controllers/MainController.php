<?php
class MainController extends CI_Controller
{
    
    function index()
    {
        $this->load->view('MainPage');
    }
    
    function forgotpwd()
    {
        $this->load->view('ForgotPassword');
    }
}