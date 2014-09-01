<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('security');
        
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    }

    /**
     * Index Page for this controller.
     *
     */
    public function index()
    {
        $module['content'] = $this->load->view('form/graduate_tracer_survey', null, TRUE);
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
    
    function profile()
    {
        $this->form_validation->set_rules('LastName', 'Lastname', 'required');
        $this->form_validation->set_rules('FirstName', 'Firstname', 'required');
        $this->form_validation->set_rules('MiddleName', 'Middlename', 'required');
        $this->form_validation->set_rules('Address', 'Address', 'required');
        $this->form_validation->set_rules('CivilStatus', 'Civil status', 'required');
        $this->form_validation->set_rules('FirstName', 'Firstname', 'required');
        $this->form_validation->set_rules('MiddleName', 'Middlename', 'required');
        $this->form_validation->set_rules('LastName', 'Lastname', 'required');
        $this->form_validation->set_rules('FirstName', 'Firstname', 'required');
        $this->form_validation->set_rules('MiddleName', 'Middlename', 'required');
        $this->form_validation->set_rules('LastName', 'Lastname', 'required');
        $this->form_validation->set_rules('FirstName', 'Firstname', 'required');
        $this->form_validation->set_rules('MiddleName', 'Middlename', 'required');

        $data['errors'] = array();

        if ($this->form_validation->run()) {
            
        }
        $module['content'] = $this->load->view('form/graduate_profile', $data, TRUE);
        $module['title'] = 'Graduate Profile';
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