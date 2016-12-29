<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class social extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mdl_social','social');
    }

    public function index() {
        $data['rows'] = $this->social->get();
        $this->load->view('add_social_platform',$data);
    }


    // function for add_platform ..
    public function add_platform() { 

        if($_POST){    
            $val = $this->input->post('social');
            $link = $this->input->post('name');
            $new_val = array_combine($link, $val);
            $fields = $this->social->get();
            foreach($fields as $field){
                $fields_names[] =  $field->social_name;
            }  
            foreach($new_val as $name => $valurl ){
                if(in_array($name,$fields_names) == FALSE){
                    $data = array('social_name' => $name,'social_url' => $valurl);
                    $this->social->save($data);
                }
                foreach ($new_val as $url => $key){
                    if(in_array($url,$fields_names)){
                        $data = array('social_url' => $key);
                        $this->social->save($data,$url);
                    }
                }
            }
        }    

        $data['rows'] = $this->social->get();
        $this->load->view('add_social_platform',$data);
    }




    private function check_for_value($key , $array){

    }


    /**
     * delete record from database 
     * @ parameter id
     * return boolean
     */

    public function delete_field() {
        $id = $this->input->post('id');
        $result = $this->social->remove($id);
        if($result == TRUE){
            echo 'there is delete';
        }
    }

        


        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */