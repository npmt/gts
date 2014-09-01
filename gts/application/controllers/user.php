<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
    
    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $module['content'] = $this->load->view('form/graduate_tracer_survey', NULL, TRUE);
        $module['styles'] = array(
            'bootstrap-datetimepicker.min',
            'datepicker',
            'page/graduate_tracer_survey'
        );
        $module['jscripts'] = array(
            'bootstrap-datetimepicker.min',
            'bootstrap-datepicker',
            'page/graduate_tracer_survey'
        );
        $this->load->view('template/base-template', $module);
    }
    
    /**
     * Login Page for the user.
     */
    public function login()
    {
        $module['content'] = $this->load->view('form/login', NULL, TRUE);
        $module['styles'] = array(
            'datepicker'
        );
        $module['jscripts'] = array(
            'bootstrap-datepicker'
        );
        $this->load->view('template/base-template', $module);
    }
    
    /**
     * Sign up Page for the user.
     */
    public function sign_up()
    {
        $module['content'] = $this->load->view('form/signup', NULL, TRUE);
        $module['styles'] = array(
            'datepicker'
        );
        $module['jscripts'] = array(
            'bootstrap-datepicker'
        );
        $this->load->view('template/base-template', $module);
    }
    
    /**
     * Page for user validation.
     */
    public function validate()
    {
        $module['content'] = $this->load->view('form/signup', NULL, TRUE);
        $module['styles'] = array(
            'datepicker'
        );
        $module['jscripts'] = array(
            'bootstrap-datepicker'
        );
        $this->load->view('template/base-template', $module);
    }
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */