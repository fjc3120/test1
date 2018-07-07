<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Model");
		$this->load->helper("url");
	}

	public function index(){
		$current["page"] = "index";
		$result = $this->db->query("SELECT * FROM text NATURAL JOIN family ORDER BY id DESC");
		if($result->result()) {
			//两个随机数
		    $array = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE img  IS NOT NULL AND img !=''")->result();
		    $index1 = rand(0,count($array)-1);
		    $query = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE id!=? AND img  IS NOT NULL AND img !=''",array($array[$index1]->id));
		    $array2 = $query->result();
		    $index2 = rand(0,count($array2)-1);
			$data = array(0=>$array[$index1],1=>$array2[$index2]);
			//
			$current["result"] = $result->result();
			$current["data"] = $data;

			$this->view_mobile_check("index", $current);
		}
	}
	public function famous(){
		$current["page"] = "famous";
		$sql = "SELECT * FROM text NATURAL JOIN family WHERE family = '名人名句' ORDER BY id DESC";
		$result = $this->db->query($sql);
		if($result->result()) {
			//两个随机数
			$array = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE family = '名人名句' AND img  IS NOT NULL AND img !=''")->result();
			$index1 = rand(0,count($array)-1);
			$query = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE family = '名人名句' AND id!=? AND img  IS NOT NULL AND img !=''",array($array[$index1]->id));
			$array2 = $query->result();
			$index2 = rand(0,count($array2)-1);
			$data = array(0=>$array[$index1],1=>$array2[$index2]);
			//
			$current["data"] = $data;
			$current["result"] = $result->result();
			$this->view_mobile_check("index", $current);
		}
	}
	public function movie(){
		$current["page"] = "movie";
		$sql = "SELECT * FROM text NATURAL JOIN family WHERE family='影视美句' ORDER BY id DESC";
		$result = $this->db->query($sql);
		if($result->result()) {
			//两个随机数
			$array = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE family='影视美句' AND img IS NOT NULL AND img !=''")->result();
			$index1 = rand(0,count($array)-1);
			$query = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE family='影视美句' AND id!=? AND img  IS NOT NULL AND img !=''",array($array[$index1]->id));
			$array2 = $query->result();
			$index2 = rand(0,count($array2)-1);
			$data = array(0=>$array[$index1],1=>$array2[$index2]);
			//
			$current["data"] = $data;
			$current["result"] = $result->result();
			$this->view_mobile_check("index", $current);
		}
	}
	public function origin(){
		$current["page"] = "origin";
		$sql = "SELECT * FROM text NATURAL JOIN family WHERE family = '原创佳句' ORDER BY id DESC";
		$result = $this->db->query($sql);
		if($result->result()) {
			//两个随机数
			$array = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE family = '原创佳句' AND img IS NOT NULL AND img !=''")->result();
			$index1 = rand(0,count($array)-1);
			$query = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE family = '原创佳句'AND id!=? AND img IS NOT NULL AND img !=''",array($array[$index1]->id));
			$array2 = $query->result();
			$index2 = rand(0,count($array2)-1);
			$data = array(0=>$array[$index1],1=>$array2[$index2]);
			//
			$current["data"] = $data;
			$current["result"] = $result->result();
			$current["family"] = "原创佳句";
			$this->view_mobile_check("index", $current);
		}
	}
	public function literature(){
		$current["page"] = "literature";
		$sql = "SELECT * FROM text NATURAL JOIN family WHERE family='文学作品' ORDER BY id DESC";
		$result = $this->db->query($sql);
		if($result->result()) {
			//两个随机数
			$array = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE family='文学作品' AND img  IS NOT NULL AND img !=''")->result();
			$index1 = rand(0,count($array)-1);
			$query = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE family='文学作品' AND id!=? AND img  IS NOT NULL AND img !=''",array($array[$index1]->id));
			$array2 = $query->result();
			$index2 = rand(0,count($array2)-1);
			$data = array(0=>$array[$index1],1=>$array2[$index2]);
			//
			$current["data"] = $data;
			$current["result"] = $result->result();
			$this->view_mobile_check("index", $current);
		}
	}
	public function ancient(){
		$current["page"] = "ancient";
		$sql = "SELECT * FROM text NATURAL JOIN family WHERE family='古句欣赏' ORDER BY id DESC";
		$result = $this->db->query($sql);
		if($result->result()) {
			//两个随机数
			$array = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE family='古句欣赏' AND img IS NOT NULL AND img !=''")->result();
			$index1 = rand(0,count($array)-1);
			$query = $this->db->query("SELECT * FROM text NATURAL JOIN family WHERE family='古句欣赏' AND id!=? AND img IS NOT NULL AND img !=''",array($array[$index1]->id));
			$array2 = $query->result();
			$index2 = rand(0,count($array2)-1);
			$data = array(0=>$array[$index1],1=>$array2[$index2]);
			//
			$current["data"] = $data;
			$current["result"] = $result->result();

			$this->view_mobile_check("index", $current);
		}
	}
	public function single(){
	    $id = 	$this->input->get("id");
	    $page = $this->input->get("page");
		$sql = "SELECT * FROM text WHERE id=?";
		$result = $this->db->query($sql,array($id));
		if($result->result()){
			//随机传2个数
			$query = $this->db->query("SELECT * FROM text WHERE id!=? AND img IS NOT NULL AND img !=''",array($id));
			$arr = $query->result();
			$index1 = rand(0,count($arr)-1);
			$query = $this->db->query("SELECT * FROM text WHERE id NOT IN (?,?) AND img IS NOT NULL AND img !=''",array($id,$arr[$index1]->id));
			$arr1 = $query->result();
			$index2 = rand(0,count($arr1)-1);
			$data = array(0=>$arr[$index1],1=>$arr1[$index2]);
			//
			$current["data"] = $data;
			$current["result"] =$result->row();
				$this->view_mobile_check("single",$current);
		}
	
	}
	public function view_mobile_check($page,$data = NULL)
	{
		require_once 'Mobile_Detect.php';
		$detect = new Mobile_Detect;
		if($detect->isMobile())
		{
			redirect('http://m.wujingchi.com','location','301');
			//echo 'Mobile!';
		}
		else
		{
			$this->load->view($page,$data);
		}
	}
}