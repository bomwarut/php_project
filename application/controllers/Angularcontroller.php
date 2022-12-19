<?php


defined('BASEPATH') OR exit('No direct script access allowed');
class Angularcontroller extends CI_Controller {

public function _construct()
{
   parent::_construct();
//    $this->load->model('member_model');
}
public function showdatafrontend()
{
echo json_encode([1,2,3,4,5]);

}
}
?>