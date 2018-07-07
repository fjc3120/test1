<?php
/**
 * Created by PhpStorm.
 * User: 邓鹏飞
 * Date: 2018/4/3
 * Time: 12:56
 */

class Model extends CI_Model
{
   public function __construct()
	{
	   parent::__construct();
	   $this->load->database();
	}
	public function getText(){
		return $this->db->get("text");
	}
	public function  getWriter(){
		return $this->db->get("writer");
	}
	public function getFamily(){
		return $this->db->get("family");
	}
}