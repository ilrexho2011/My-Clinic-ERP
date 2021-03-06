<?php if ( ! defined('BASEPATH')) exit('Nuk lejohet aksesimi direkt i script-it');

class Error extends CI_Controller {

	
	function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->library('session');
		/*cache control*/
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
    }
	
	/*** funksioni standart, redirekton ne faqen login nese asnje admin nuk eshte loguar ende ***/
	public function index()
	{
		
	}
	
	function page_missing()
	{
		
        $page_data['page_name']  = 'error_404';
        $page_data['page_title'] = get_phrase('page_not_found');
        $this->load->view('backend/index', $page_data);
	}
}

