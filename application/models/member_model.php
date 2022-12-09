<?php
class Member_model extends CI_Model {

    public function addmember()
    {
        $data = array(
            'm_name' => $this->input->post('m_name'),
            'm_lname' => $this->input->post('m_lname'),
        );
        $query = $this->db->insert('tbl_member',$data);

        if($query){
            echo 'Insert data success';
        }else{
            echo 'false';
        }
    }

    public function showdata()
    {
            $query = $this->db->get('tbl_member');
            return $query->result();
    }
    
    public function editmember()
    {
        $data = array(
            'm_name' => $this->input->post('m_name'),
            'm_lname' => $this->input->post('m_lname'),
        );
        $this->db->where('m_id',$this->input->post('m_id'));
        $query = $this->db->update('tbl_member',$data);
        if($query){
            echo 'Edit data success';
        }else{
            echo 'false';
        }
    }

    public function read($m_id)
    {
            $this->db->select('*');
            $this->db->from('tbl_member');
            $this->db->where('m_id',$m_id);
            $query = $this->db->get();
            if($query->num_rows()>0){
                $data = $query->row();
                return $data;
            }
            return FALSE;
    }

}
?>