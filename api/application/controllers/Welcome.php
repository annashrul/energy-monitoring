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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct(){
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
		date_default_timezone_set('Asia/Jakarta');
    }
	public function index()
	{
		// date_default_timezone_set('Asia/Jakarta');
		// $dateNow = date('H');
		// echo "<pre/>";
		// $checkIsZero=(substr($dateNow,1,1));
		// $newHours="";
		// if($checkIsZero == "0"){
		// 	$newHours = substr($dateNow,1,2);
		// }
		// // var_dump(substr($dateNow,1,1));
		// die();
		$this->load->view('welcome_message');
	}

	public function get_daily(){
        $newData=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        $data = $this->db->query("select HOUR(created_at) hour, created_at, series from chart_daily where date_format(created_at,'%d') = date_format(CURDATE(),'%d') and date_format(created_at,'%M') = date_format(CURDATE(),'%M') and date_format(created_at,'%y') = date_format(CURDATE(),'%y')")->result_array();
		$h="";
		if(count($data) > 0){
			foreach($data as $key=>$row){
				if($row['hour']=="0"){
					$newData[23] =  $row['series'];
				}else{
					$newData[(int)$row['hour']-1] =  $row['series'];
				}
			}
		}

        echo json_encode($newData);
    }
    public function insert_data(){
		
        $isTrue=$this->db->insert("chart_daily",array(
	        "series"=>$_POST["series"]
        ));
        echo json_encode(array("status"=>$isTrue));

    }

	public function get_monthly(){
		$data = $this->db->query("SELECT * FROM `chart_daily` where date_format(created_at,'%Y') = date_format(CURDATE(),'%Y') group by date_format(created_at,'%M');")->result_array();

	}
}