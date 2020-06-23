<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{ 
		//edited by Khadija
		$this->load->model('Article_Model');
		$data['Content']='Main/Landing';
		$data['Title']='Aurora';
		$data['articles'] = $this->Article_Model->GetArticle(1);
		$this->load->view('SharedLayouts/Main',$data);
	}
	public function ShowArticle()
{
	$this->load->model('Article_Model');
    $data['Content'] = "Main/Article";
    $data['Title'] = "Articles";
    $data['articles'] = $this->Article_Model->GetArticle();
    $this->load->view('SharedLayouts/Main', $data);
}


}
