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

    public function get_daily(){
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
                if($row['tanggal']=="0"){
                    $newData[23] =  ceil($row['series']);
                }else{
                    $newData[(int)$row['tanggal']-1] =  ceil($row['series']);
                }
            }
        }
        echo json_encode($newData);

    }

    public function get_monthly(){
        $newData=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        $data = DB::select("
          select DAY(created_at) as tanggal, sum(series) as series 
          from chart_daily 
          where date_format(created_at,'%Y')=date_format(CURDATE(),'%Y') and date_format(created_at,'%m') =date_format(CURDATE(),'%m') 
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
        $newData=[0,0,0,0,0,0,0,0,0,0,0,0];
        $data = DB::select("
            SELECT MONTH(created_at) tanggal, sum(series) series FROM `chart_daily`
            where date_format(created_at,'%Y') = date_format(CURDATE(),'%Y')
            group by MONTH(created_at)
            order by date_format(created_at,'%m') asc
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

    public function insert(Request $request){
        $isTrue=DB::table('chart_daily')->insert([
            'series' =>  ceil($request->series),
        ]);
        echo json_encode(array("status"=>$isTrue));
    }
}