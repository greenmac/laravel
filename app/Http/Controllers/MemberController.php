<?php
namespace App\Http\Controllers;
class MemberController extends Controller
{
  // public function info()
  // {
  //   // return 'member_info';
  //   return route('memberinfo');
  // }

  public function info($id)
  {
    return 'member_info_id_'.$id;
  }

}
?>
