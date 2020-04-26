<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Contact extends CI_Controller
{
	
	public function contact_form()
{
    
    $this->load->library('email');
    $this->load->library('form_validation');

    //Set form validation
    $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[0]|max_length[100]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[6]|max_length[60]');
    $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
    $this->form_validation->set_rules('message', 'Message', 'trim|required');

    //Run form validation
    if ($this->form_validation->run() === FALSE)
    {
        redirect('contact/contact_failed');
    } else {

        //Get the form data
        $name = $this->input->post('name');
        $from_email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        //Web master email
        $to_email = 'maksakimov.ru@gmail.com'; //Webmaster email, who receive mails

        //Mail settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'maksym.akimov@nure.ua'; // Your email address
        $config['smtp_pass'] = 'M0660346195max'; // Your email account password
        $config['mailtype'] = 'text'; // or 'text'
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE; //No quotes required
        $config['newline'] = "\r\n"; //Double quotes required

        $this->email->initialize($config);                        

        //Send mail with data
        $this->email->from($from_email, $name);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        
        if ($this->email->send())
        {

            redirect('contact/contact_success');
        } else {
            
            redirect('home/index');
        }

   

    }

}
public function contact_success()
{
	$this->load->view('contact_success');
}
public function contact_failed()
{
	$this->load->view('contact_failed');
}
}
?>