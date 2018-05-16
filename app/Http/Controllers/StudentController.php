<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
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

        $bool=DB::table('student')->insert([
            ['name'=>'黑豹','age'=>18],
            ['name'=>'黑寡婦','age'=>19],
        ]);
        var_dump($bool);
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

        DB::table('student')->truncate();//清空資料表,非不得已不要用
    }
}