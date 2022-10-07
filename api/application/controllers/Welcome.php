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
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function get_data($no){
		// $h=date("m");
		// if(substr($h,0,1) == "0"){
		// 	$h=substr($h,1,1);
		// }
		$newNo=(int)$no;
        $newData=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
		if($newNo == 25){
			$this->db->query("DELETE * FROM chart_daily");
			$newNo=0;
		}
        $data = $this->db->query("select * from chart_daily ORDER BY id limit 24 ")->result_array();
		foreach($data as $key=>$row){
			$newData[$key] = $row["series"];
		}
		// $newData[$newNo] = $data[$newNo]["series"];

        // $newData[count($data)-1] = $data[count($data)-1]["series"];
		
        echo json_encode($newData);
    }
    public function insert_data(){

        $isTrue=$this->db->insert("chart_daily",array(
	        "series"=>$_POST["series"]
        ));
        // $data = $this->db->query("select count(*) from chart_daily where date_format(created_at,'%Y-%m-%d') =  CURDATE()")->result_array();
        echo json_encode(array("status"=>$isTrue));

    }
}