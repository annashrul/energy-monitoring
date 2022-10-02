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

	private function toDate($col,$val){
        return "date_format($col,'%".$val."')";
    }

	public function get_daily(){
        $newData=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        $data = $this->db->query("
          SELECT hour(created_at) as tanggal, sum(series) as series
            FROM chart_daily
            WHERE YEAR(created_at)=YEAR(CURDATE()) and MONTH(created_at) = MONTH(CURDATE()) and DAY(created_at)=DAY(CURDATE())
            GROUP BY hour(created_at)
            ORDER BY created_at asc;
        ")->result_array();
		if(count($data) > 0){
			foreach($data as $key=>$row){
				if($row['tanggal']=="0"){
					$newData[23] =  ceil($row['series']);
				}else{
					$newData[(int)$row['tanggal']-1] =  ceil($row['series']);
				}
                // $newData[(int)$row['tanggal']-1] =  $row['series'];
			}
		}

        echo json_encode($newData);
    }
    public function insert_data(){
        $isTrue=$this->db->insert("chart_daily",array("series"=>ceil($_POST["series"])));
        echo json_encode(array("status"=>$isTrue));
    }


    public function get_monthly(){
        $newData=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        $data = $this->db->query("select DAY(created_at) as tanggal, sum(series) as series from chart_daily where date_format(created_at,'%Y')=date_format(CURDATE(),'%Y') and date_format(created_at,'%m') =date_format(CURDATE(),'%m') group by date_format(created_at,'%d') ORDER BY created_at asc")->result_array();
        $tgl=[];
        foreach ($data as $key => $row){
            $newData[(int) $row['tanggal']-1] =  ceil($row['series']);
        }
        for($i=1;$i<31;$i++){
            $tgl[]=$i;
        }

        echo json_encode(array('series'=>$newData,"tanggal"=>$tgl));
    }
    public function get_yearly(){
        $newData=[0,0,0,0,0,0,0,0,0,0,0,0];
        $data = $this->db->query("
            SELECT MONTH(created_at) tanggal, sum(series) series FROM `chart_daily`
            where date_format(created_at,'%Y') = date_format(CURDATE(),'%Y')
            group by MONTH(created_at)
            order by date_format(created_at,'%m') asc
        ")->result_array();
        $tgl=[];
        foreach ($data as $key => $row){
            $newData[(int) $row['tanggal']-1] = ceil( $row['series']);
        }
        for($i=1;$i<13;$i++){
            $tgl[]=$i;
        }
        echo json_encode(array('series'=>$newData,"tanggal"=>$tgl));
    }
}