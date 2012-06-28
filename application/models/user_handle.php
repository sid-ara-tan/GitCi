<?php

class user_handle extends CI_Model{
    
    public function create_user_account() {
   /*     echo $this->input->POST('name');
        echo $this->input->POST('username');
        echo $this->input->POST('password');
        echo $this->input->POST('password2');
        echo $this->input->POST('credit_no');
        die();*/
        
        $new_user_data=array(
                
                'name'=>  $this->input->post('name'),
                'username'=>  $this->input->post('username'),
                'Password'=> $this->input->post('password'),
                'credit_number'=>  $this->input->post('credit_no')
            );
        
        $insert=$this->db->insert('user',$new_user_data);

        return $insert;
    }
}
?>
