<?php
namespace App\Http\Controllers;

use App\Member;
class MemberController extends Controller
{
  // public function info()
  // {
  //   // return 'member_info';
  //   return route('memberinfo');
  // }

  public function info($id)
  {
    return Member::getMember();
    // return 'member_info_id_'.$id;
    // return view('member_info');

    // return view('member/info', [
    //   'name'=>'鋼鐵人',
    //   'age'=>30
    // ]);
  }

}
?>
