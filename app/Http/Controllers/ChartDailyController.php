<?php
/**
 * Created by PhpStorm.
 * User: anasrulysf
 * Date: 10/14/2022
 * Time: 10:04
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChartDailyController extends Controller
{
    

    public function getAbnormality(){
        
    }


    public function get_daily(){
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Credentials: true");
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
        $newData=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        $data = DB::select("
            SELECT hour(created_at) as tanggal, sum(series) as series
            FROM chart_daily
            WHERE YEAR(created_at)=YEAR(CURDATE()) and MONTH(created_at) = MONTH(CURDATE()) and DAY(created_at)=DAY(CURDATE())
            GROUP BY hour(created_at)
            ORDER BY created_at asc"
        );
        if(count($data) > 0){
            foreach($data as $key=>$row){
                if($row->tanggal=="0"){
                    $newData[0] =  ceil($row->series);
                }else{
                    $newData[(int)$row->tanggal] =  ceil($row->series);
                }
            }
        }
        echo json_encode($newData);

    }

    public function get_monthly(){
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Credentials: true");
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
        $newData=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        $data = DB::select("
          select DAY(created_at) as tanggal, sum(series) as series 
          from chart_daily 
          where YEAR(created_at)=YEAR(CURDATE()) and MONTH(created_at) = MONTH(CURDATE())
          group by DAY(created_at) 
          ORDER BY created_at 
        ");
        $tgl=[];
        foreach ($data as $key => $row){
            $newData[(int) $row->tanggal-1] =  ceil($row->series);
        }
        for($i=1;$i<31;$i++){
            $tgl[]=$i;
        }

        echo json_encode(array('series'=>$newData,"tanggal"=>$tgl));
    }
    public function get_yearly(){
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Credentials: true");
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
        $newData=[0,0,0,0,0,0,0,0,0,0,0,0];
        $data = DB::select("
            SELECT MONTH(created_at) tanggal, sum(series) series FROM `chart_daily`
            where YEAR(created_at) = YEAR(CURDATE())
            group by MONTH(created_at)
            order by MONTH(created_at) asc
        ");
        $tgl=[];
        foreach ($data as $key => $row){
            $newData[(int) $row->tanggal-1] = ceil( $row->series);
        }
        for($i=1;$i<13;$i++){
            $tgl[]=$i;
        }
        echo json_encode(array('series'=>$newData,"tanggal"=>$tgl));
    }

    public function insertFirst(Request $request){
         header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Credentials: true");
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
         $newData=[];
         for($i=0;$i<count($request->idx);$i++){
             $createdAt=date("Y-m-d H:i:s",strtotime(date("Y-m-d").$request->idx[$i].":00:00"));
             DB::table('chart_daily')->where('created_at',$createdAt)->delete();
             $newData[]=array(
                 'series' =>  ceil(rand(1000,10000)),
                 'created_at'=>$createdAt
             );
         }
        $isTrue=DB::table('chart_daily')->insert($newData);
        echo json_encode(array(
            "status"=>$isTrue,
        ));
    }

    public function insert(Request $request){
         header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Credentials: true");
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
        $isTrue=DB::table('chart_daily')->insert([
            'series' =>  ceil($request->series),
        ]);

        echo json_encode(array(
            "status"=>$isTrue
        ));
    }
}