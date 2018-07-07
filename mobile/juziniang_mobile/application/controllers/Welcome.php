<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->database();
	}
	public function index($id=0)
	{
		$essay_sum = 10;//每页显示十个句子
		$count = 0;
		$return = array();
		$return_backup = array();
		switch ($id) 
		{
			case 0:
				$max = $this->db->query("SELECT MAX(id) FROM `text`");
				break;
			case 1:
				$max = $this->db->query("SELECT MAX(id) FROM `kind01`");
				break;
			case 2:
				$max = $this->db->query("SELECT MAX(id) FROM `kind02`");
				break;
			case 3:
				$max = $this->db->query("SELECT MAX(id) FROM `kind03`");
				break;
			case 4:
				$max = $this->db->query("SELECT MAX(id) FROM `kind04`");
				break;
			case 5:
				$max = $this->db->query("SELECT MAX(id) FROM `kind05`");
				break;
		}
		$max = $max->result()[0];
		foreach ($max as $key => $value) {
			while($count< $essay_sum)
			{
				$return[$count] = mt_rand(1, $value);
				$return_backup = array_flip(array_flip($return));
				if(count($return_backup) != count($return))
					continue;
				$count = $count + 1;
				$return = $return_backup;
			}
		}
		$data = array();
		$data['id'] = $id;
		$count = 0;
		switch ($id) 
		{
			case 0:
				while($count<$essay_sum)
				{
					$query = $this->db->query(" SELECT * FROM `text` WHERE id = '".$return[$count]."'");
					$data['sentence'][$count]['writer']=$query->result()[0]->writer;
					$data['sentence'][$count]['context']=$query->result()[0]->context;
					$data['sentence'][$count]['book']=$query->result()[0]->book;
					$data['sentence'][$count]['upper']=$query->result()[0]->upper;
					$data['sentence'][$count]['id']=$query->result()[0]->id;
					$count = $count+1;
				}
				$max = $this->db->query("SELECT MAX(id) FROM `text`");
				break;
			case 1:
				while($count<$essay_sum)
				{
					$query = $this->db->query(" SELECT * FROM `kind01` WHERE id = '".$return[$count]."'");
					$data['sentence'][$count]['writer']=$query->result()[0]->writer;
					$data['sentence'][$count]['context']=$query->result()[0]->context;
					$data['sentence'][$count]['book']=$query->result()[0]->book;
					$data['sentence'][$count]['upper']=$query->result()[0]->upper;
					$data['sentence'][$count]['id']=$query->result()[0]->id;
					$count = $count+1;
				}
				break;
			case 2:
				while($count<$essay_sum)
				{
					$query = $this->db->query(" SELECT * FROM `kind02` WHERE id = '".$return[$count]."'");
					$data['sentence'][$count]['writer']=$query->result()[0]->writer;
					$data['sentence'][$count]['context']=$query->result()[0]->context;
					$data['sentence'][$count]['book']=$query->result()[0]->book;
					$data['sentence'][$count]['upper']=$query->result()[0]->upper;
					$data['sentence'][$count]['id']=$query->result()[0]->id;
					$count = $count+1;
				}
				break;
			case 3:
				while($count<$essay_sum)
				{
					$query = $this->db->query(" SELECT * FROM `kind03` WHERE id = '".$return[$count]."'");
					$data['sentence'][$count]['writer']=$query->result()[0]->writer;
					$data['sentence'][$count]['context']=$query->result()[0]->context;
					$data['sentence'][$count]['book']=$query->result()[0]->book;
					$data['sentence'][$count]['upper']=$query->result()[0]->upper;
					$data['sentence'][$count]['id']=$query->result()[0]->id;
					$count = $count+1;
				}
				break;
			case 4:
				while($count<$essay_sum)
				{
					$query = $this->db->query(" SELECT * FROM `kind04` WHERE id = '".$return[$count]."'");
					$data['sentence'][$count]['writer']=$query->result()[0]->writer;
					$data['sentence'][$count]['context']=$query->result()[0]->context;
					$data['sentence'][$count]['book']=$query->result()[0]->book;
					$data['sentence'][$count]['upper']=$query->result()[0]->upper;
					$data['sentence'][$count]['id']=$query->result()[0]->id;
					$count = $count+1;
				}
				break;
			case 5:
				while($count<$essay_sum)
				{
					$query = $this->db->query(" SELECT * FROM `kind05` WHERE id = '".$return[$count]."'");
					$data['sentence'][$count]['writer']=$query->result()[0]->writer;
					$data['sentence'][$count]['context']=$query->result()[0]->context;
					$data['sentence'][$count]['book']=$query->result()[0]->book;
					$data['sentence'][$count]['upper']=$query->result()[0]->upper;
					$data['sentence'][$count]['id']=$query->result()[0]->id;
					$count = $count+1;
				}
				break;
		}
		$this->view_mobile_check('index',$data);
		
		
	}
	public function kind($family_id)
	{
		
	}
	public function essay($id,$kind)
	{
		$data = array();
		switch ($kind) 
		{
			case 0:
				$query = $this->db->query(" SELECT * FROM `text` WHERE id = '".$id."'");
				break;
			case 1:
				$query = $this->db->query(" SELECT * FROM `kind01` WHERE id = '".$id."'");
				break;
			case 2:
				$query = $this->db->query(" SELECT * FROM `kind02` WHERE id = '".$id."'");
				break;
			case 3:
				$query = $this->db->query(" SELECT * FROM `kind03` WHERE id = '".$id."'");
				break;
			case 4:
				$query = $this->db->query(" SELECT * FROM `kind04` WHERE id = '".$id."'");
				break;
			case 5:
				$query = $this->db->query(" SELECT * FROM `kind05` WHERE id = '".$id."'");
				break;
		}
		$data['sentence']['writer']=$query->result()[0]->writer;
		$data['sentence']['context']=$query->result()[0]->context;
		$data['sentence']['book']=$query->result()[0]->book;
		$data['sentence']['upper']=$query->result()[0]->upper;
		$data['sentence']['id']=$query->result()[0]->id;
		$this->view_mobile_check('essay',$data);
	}
	public function view_mobile_check($page,$data = NULL)
	{
		require_once 'Mobile_Detect.php';
		$detect = new Mobile_Detect;
		if($detect->isMobile())
		{
			$this->load->view($page,$data);
		}
		else
		{
			redirect('http://www.wujingchi.com','location','301');
		}
	}
}
