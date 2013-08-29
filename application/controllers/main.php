<?php
class Main extends CI_Controller
{
public function index()
{
$this->load->model('message_model');
$this->message_model->setMessage("Anupong Potipipit 54/94 544259167");
$data['displayMessage'] = $this->message_model->getMessage();
$this->load->view('viewpage',$data);
}
}
?>