<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
            
    function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('security');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->form_validation->set_error_delimiters('<li>', '</li>');
    }
    
    /**
     * Index Page for this controller.
     */
    public function index()
    {
        if ($this->tank_auth->is_logged_in()) {
            $this->load->model('Graduates');
            $profile = $this->Graduates->get_where(array('user_id' => $this->tank_auth->get_user_id()));
            if(count($profile) > 0)
            {
                redirect('/user/profile/');
            } else {
                redirect('/user/new_profile/');
            }
        } elseif ($this->tank_auth->is_logged_in(FALSE)) {
            redirect('/auth/send_again/');
        } else {
            redirect('/auth/login/');
        }
    }
    
    /**
     * Graduate profile page.
     */
    public function profile($active_tab)
    {
        if ($this->tank_auth->is_logged_in()) {
            $this->load->model('Graduates');
            $user_id = $this->tank_auth->get_user_id();
            $profile = $this->Graduates->get_where(array('user_id' => $user_id));
            if(count($profile) > 0)
            {
                $this->load->model('tank_auth/users','Users');
                $profile = current($profile);
                if( ! empty($active_tab))
                {
                    $data['active_tab'] = $active_tab;
                }
                $data['profile'] = $profile;
                $data['user'] = $this->Users->get_user_by_id($user_id, TRUE);
                $module['content'] = $this->load->view('template/profile', $data, TRUE);
                $module['title'] = 'Profile';
                $module['menu'] = $this->load->view('menu/graduate_profile', NULL, TRUE);
                $module['modals'] = array(
                    $this->load->view('modals/upload_picture', NULL, TRUE)
                );
                $module['jscripts'] = array(
                    'bootstrap-filestyle.min'
                );
                $this->load->view('template/base-template', $module);
            } else {
                redirect('/user/change_profile/');
            }
        } elseif ($this->tank_auth->is_logged_in(FALSE)) {
            redirect('/auth/send_again/');
        } else {
            redirect('/auth/login/');
        }
    }
    
    /**
     * Change/Create graduate profile.
     */
    public function change_profile()
    {
        if ($this->tank_auth->is_logged_in()) {
            $this->load->model('Graduates');
            $profile = $this->Graduates->get_where(array('user_id' => $this->tank_auth->get_user_id()));
            $this->form_validation->set_rules('LastName', 'Lastname', 'trim|required');
            $this->form_validation->set_rules('FirstName', 'Firstname', 'trim|required');
            $this->form_validation->set_rules('MiddleName', 'Middlename', 'trim|required');
            $this->form_validation->set_rules('LastName01', 'Maiden Lastname', 'trim');
            $this->form_validation->set_rules('ExtensionName', 'Name Suffix', 'trim');
            $this->form_validation->set_rules('Address', 'Address', 'trim|required');
            $this->form_validation->set_rules('BirthDate', 'Birthdate', 'trim|required');
            $this->form_validation->set_rules('Province', 'Province', 'trim|required');
            $this->form_validation->set_rules('TelephoneNo', 'Telephone Number', 'trim');
            $this->form_validation->set_rules('CellphoneNo', 'Cellphone Number', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $data['errors'] = validation_errors();
            } else {
                if(count($profile) > 0)
                {
                    $GraduateId = current(array_keys($profile));
                    $this->Graduates->GraduateId = $GraduateId;
                }
                $this->Graduates->LastName = $this->form_validation->set_value('LastName');
                $this->Graduates->FirstName = $this->form_validation->set_value('FirstName');
                $this->Graduates->MiddleName = $this->form_validation->set_value('MiddleName');
                $this->Graduates->LastName01 = $this->form_validation->set_value('LastName01');
                $this->Graduates->ExtensionName = $this->form_validation->set_value('ExtensionName');
                $this->Graduates->Address = $this->form_validation->set_value('Address');
                $this->Graduates->CivilStatus = $this->input->post('CivilStatus');
                $this->Graduates->Sex = (int) $this->input->post('Sex');
                $this->Graduates->BirthDate = $this->form_validation->set_value('BirthDate');
                $this->Graduates->RegionOfOrigin = $this->input->post('RegionOfOrigin');
                $this->Graduates->Province = $this->form_validation->set_value('Province');
                $this->Graduates->LocationOfResidence = (int) $this->input->post('LocationOfResidence');
                $this->Graduates->TelephoneNo = $this->form_validation->set_value('TelephoneNo');
                $this->Graduates->CellphoneNo = $this->form_validation->set_value('CellphoneNo');
                $this->Graduates->user_id = $this->tank_auth->get_user_id();
                $this->Graduates->DepartmentId = 1;
                $this->Graduates->save();
                redirect('/user/profile/');
            }
            if(count($profile) > 0)
            {
                $GraduateId = current(array_keys($profile));
                $this->Graduates->load($GraduateId, 1);
            }
            $module['content'] = $this->load->view('form/graduate_profile', $data, TRUE);
            $module['title'] = 'Create new profile';
            $module['menu'] = $this->load->view('menu/graduate_profile', NULL, TRUE);
            $module['styles'] = array(
                'datepicker'
            );
            $module['jscripts'] = array(
                'bootstrap-datepicker'
            );
            $this->load->view('template/base-template', $module);
        } elseif ($this->tank_auth->is_logged_in(FALSE)) {
            redirect('/auth/send_again/');
        } else {
            redirect('/auth/login/');
        }
    }
    
    public function upload_pic()
    {
        if ($this->tank_auth->is_logged_in()) {
            $GraduateId = $this->_graduate_id();
            $config['upload_path'] = './assets/uploads/images';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '100';
            $config['max_width']  = '500';
            $config['max_height']  = '500';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = $this->upload->data();
                $this->load->model('Graduates');
                $this->Graduates->GraduateId = $GraduateId;
                $this->Graduates->Pricture = $data['file_name'];
                $this->Graduates->set_profile_pic();
                redirect('/user/profile/');
            }
        } elseif ($this->tank_auth->is_logged_in(FALSE)) {
            redirect('/auth/send_again/');
        } else {
            redirect('/auth/login/');
        }
    }
    
    private function _graduate_id()
    {
        $this->load->model('Graduates');
        $profile = $this->Graduates->get_where(array('user_id' => $this->tank_auth->get_user_id()));
        if(count($profile) <= 0)
        {
            redirect('/user/change_profile/');
        } else {
            $GraduateId = current(array_keys($profile));
            return $GraduateId;
        }
    }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */