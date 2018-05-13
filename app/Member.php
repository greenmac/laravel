<?php
namespace App;

// USE Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Model;
class Member extends Model
{
  public static function getMember()
  {
    return 'Member name is 鋼鐵人';
  }
}
