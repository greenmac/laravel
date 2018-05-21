<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
//$create_time=strtotime(date('Y/m/d H:i:s'));
use App\Student;

class StudentController extends Controller
{
//    $create_time=strtotime(date('Y/m/d H:i:s'));
    public function test1()
    {
        ##新增
//        $bool=DB::insert('insert into student(name,age) values(?,?)',
//            ['蜘蛛人',25]);
//        var_dump($bool);

        ##修改
//        $num=DB::update('update student set age=? where name=?',
//            [27,'蜘蛛人']);
//        var_dump($num);

        ##查詢
//        $student=DB::select('select * from student where id >?',
//            [1]);
//        dd($student);

//        ##刪除
//        $num2=DB::delete('delete from student where id>?',
//        [1]);
//        var_dump($num2);
    }

    ##使用查詢產生器更新數據(PDO)
    public function query1()
    {
//        $bool=DB::table('student')->insert(
//            ['name'=>'鋼鐵人','age'=>30]
//        );
//        var_dump($bool);

//        $id=DB::table('student')->insertgetid(
//            ['name'=>'蜘蛛人','age'=>25]
//        );
//        var_dump($id);

//        $bool=DB::table('student')->insert([
//            ['name'=>'黑豹','age'=>18,'start_time'=>'from'],
//            ['name'=>'黑寡婦','age'=>19],
//        ]);
//        var_dump($bool);
    }

    ##使用查詢產生器更新數據(PDO)
    public function query2(){

//        $num=DB::table('student')
//            ->where('id',3)
//            ->update(['age'=>35]);
//
//        var_dump($num);

//        $num=DB::table('student')->increment('age');//自動+1
//        $num=DB::table('student')->increment('age',3);//自動+3

//        $num=DB::table('student')->decrement('age');//自動-1
//        $num=DB::table('student')->decrement('age',3);//自動-3

//        $num=DB::table('student')
//            ->where('id',3)
//            ->decrement('age',4);//自動+1,條件

//        $num=DB::table('student')
//            ->where('id',3)
//            ->decrement('age',4,['name'=>'鋼鐵浩克']);//自動-4,條件
//
//        var_dump($num);
    }

    ##使用查詢產生器刪除數據(PDO)
    public function query3(){

//        $num=DB::table('student')
//            ->where('id',8)
//            ->delete();

//        $num=DB::table('student')
//            ->where('id','>=',4)
//            ->delete();
//
//        var_dump($num);

//        DB::table('student')->truncate();//清空資料表,非不得已不要用
    }

    public function query4(){
//       $bool=DB::table('student')->insert([
//           ['name'=>'鋼鐵人','age'=>30],
//            ['name'=>'蜘蛛人','age'=>25],
//            ['name'=>'黑豹','age'=>20],
//            ['name'=>'黑寡婦','age'=>15],
//            ['name'=>'浩克','age'=>10],
//       ]);
//
//       var_dump($bool);

//        $student=DB::table('student')->get();

        ##first 得到第一條筆數
//        $student=DB::table('student')
//            ->orderby('id','desc')
//            ->first();
//        dd($student);

        ##where
//        $student=DB::table('student')
//            ->where('id','>=',2)
//            ->get();
//        dd($student);

//        $student=DB::table('student')
//            ->whereRaw('id >= ? and age <= ?',[2,20])
//            ->get();
//        dd($student);

        ##pluck返回指定的欄位
        // $name=DB::table('student')
        //     ->pluck('name');
        // dd($name);

        ##pluck返回指定的欄位,id為key值
        // $name=DB::table('student')
        //     ->pluck('name','id');
        // dd($name);

        ##select
        // $student=DB::table('student')
        //     ->select('age','name','id')
        //     ->get();
        // dd($student);

        ##chunk(目前有錯誤),一次查詢幾條為一組
        // echo '<pre>';
        // DB::table('student')
        // ->chunk(2,function($student){
        //     var_dump($student);
        //
        //     if(你的條件){
        //       return false;
        //     }
        // });
    }

    ##聚合函數
    public function query5(){
      // $num = DB::table('student')->count('name');
      // var_dump($num);

      // $max=DB::table('student')->max('age');
      // var_dump($max);

      // $min=DB::table('student')->min('age');
      // var_dump($min);

      // $avg=DB::table('student')->avg('age');
      // var_dump($avg);

     // $sum=DB::table('student')->sum('age');
     // var_dump($sum);
    }

    public function orm1()
    {
      ## all
      // $student=Student::all();
      // dd($student);

      ## find
      // $student=Student::find(1);
      // dd($student);

      ## findOrFail
      // $student=Student::findOrFail(10);
      // dd($student);

      // $student=Student::get();
      // dd($student);

      // $student=Student::where('id','>',1)
      // ->orderBy('age','desc')
      // ->first();
      // dd($student);

      ##chunk,一次查詢幾條為一組(上面的chunk不知道為什麼會報錯)
      // echo '<pre>';
      // Student::chunk(2,function($student){
      //   var_dump($student);
      // });

      ##聚合函數
      // $num=Student::count();
      // var_dump($num);

      $max=Student::where('id','>',1)->max('age');
      var_dump($max);

    }

}
