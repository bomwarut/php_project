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

    public function addmember2()
    {
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '3000';
        $config['max_height'] = '3000';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
        if(! $this->upload->do_upload('m_img'))
        {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $filename = $data['file_name'];
            $data = array(
                'm_name' => $this->input->post('m_name'),
                'm_lname' => $this->input->post('m_lname'),
                'm_img' => $filename
            );

            $query=$this->db->insert('tbl_member',$data);
        }
    }
    
    public function editmember()
    {
        $data = array(
            'm_name' => $this->input->post('m_name'),
            'm_lname' => $this->input->post('m_lname'),
        );
        $this->db->where('m_id',$this->input->post('m_id'));
        $query = $this->db->update('tbl_member',$data);
    }

    public function showdata()
    {
            // $query = $this->db->get('tbl_member');
            $query =" SELECT * FROM tbl_member";
          return $this->db->query($query)->result();
    }

    public function showdata2()
    {
            $this->db->select('m.m_id,m.m_img,m.m_name,m.m_lname,m.m_datesave,p.pname');
            $this->db->from('tbl_member as m');
            $this->db->join('tbl_position as p','m.pid = p.pid');
            $query = $this->db->get();
            return $query->result();
    }

    public function showdata3()
    {
            $this->db->select('m.*,p.*');
            $this->db->from('tbl_member as m');
            $this->db->join('tbl_position as p','m.pid = p.pid','left');
            $query = $this->db->get();
            return $query->result();
    }

    public function showdata4()
    {
            $this->db->select('m.m_id,m.m_img,m.m_name,m.m_lname,m.m_datesave,p.pname');
            $this->db->from('tbl_member as m');
            $this->db->join('tbl_position as p','m.pid = p.pid');
            $this->db->where('p.pname','It');
            $query = $this->db->get();
            return $query->result();
    }

    public function showdata5()
    {
            $this->db->select('m.m_id,m.m_img,m.m_name,m.m_lname,m.m_datesave,p.pname');
            $this->db->from('tbl_member as m');
            $this->db->join('tbl_position as p','m.pid = p.pid');
            $this->db->where('m.pid','3');
            $query = $this->db->get();
            return $query->result();
    }

    public function showdata6()
    {
            $this->db->select('m.m_id,m.m_img,m.m_name,m.m_lname,m.m_datesave,p.pname');
            $this->db->from('tbl_member as m');
            $this->db->join('tbl_position as p','m.pid = p.pid');
            $this->db->where_in('m.pid',array('3','2'));
            $query = $this->db->get();
            return $query->result();
    }

    public function showdata7()
    {
            $this->db->select('m.m_id,m.m_img,m.m_name,m.m_lname,m.m_datesave,p.pname');
            $this->db->from('tbl_member as m');
            $this->db->join('tbl_position as p','m.pid = p.pid');
            $this->db->where('m.pid < 2');
            $query = $this->db->get();
            return $query->result();
    }

    public function showdata8()
    {
            $this->db->select('m.m_id,m.m_img,m.m_name,m.m_lname,m.m_datesave,p.pname');
            $this->db->from('tbl_member as m');
            $this->db->join('tbl_position as p','m.pid = p.pid');
            $this->db->order_by('m.pid','desc');
            $query = $this->db->get();
            return $query->result();
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
    
    public function deletedata($m_id) 
    {
            $this->db->delete('tbl_member',array('m_id'=>$m_id));
    }
}
?>