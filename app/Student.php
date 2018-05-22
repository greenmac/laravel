<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //指定表名
    protected $table = 'student';

    //指定id
    protected $primaryKey = 'id';

    //指定允許批量數值的字段
    protected $fillable = ['name','age'];

    //指定不允許批量數值的字段
    protected $guarded = [];

    // 自動維護時間戳
    public $timestamps = true;

    // $timestamps = true,一定要加下面這段
    public function getDateFormat()
    {
      return time();
    }

    public function asDateTime($val)
    {
      return $val;
    }
}
?>
