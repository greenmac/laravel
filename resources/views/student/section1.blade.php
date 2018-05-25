@extends('layouts')

@section('header')
  @parent
  header
@stop

@section('sidebar')
  {{-- @parent --}}
  sidebar
@stop

@section('content')
  content

  <!-- 1.模板中輸出php變量 -->
  <p>{{$name}}</p>

  <!-- 2.模板中調用php變量 -->
  <p>{{time()}}</p>
  <p>{{date('Y/m/d H:i:s',time())}}</p>
  <p>{{in_array($name,$arr)?'true':'false'}}</p><!--in_array(檢測值,陣列)-->
  <p>{{var_dump($arr)}}</p>
  <p>{{isset($name)?$name:'default'}}</p>
  <p>{{$name or 'default'}}</p>
  <p>{{$name1 or 'default'}}</p>

  <!--3.原樣輸出-->
  <p>@{{$name}}</p>

  {{-- 4.模板中的註釋 --}}

  {{-- 5.引入子視圖 include --}}
  @include('student.common1',['message'=>'我是錯誤訊息'])
@stop
