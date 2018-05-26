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
  {{-- <p>{{$name}}</p> --}}

  <!-- 2.模板中調用php變量 -->
  {{-- <p>{{time()}}</p>
  <p>{{date('Y/m/d H:i:s',time())}}</p>
  <p>{{in_array($name,$arr)?'true':'false'}}</p><!--in_array(檢測值,陣列)-->
  <p>{{var_dump($arr)}}</p>
  <p>{{isset($name)?$name:'default'}}</p>
  <p>{{$name or 'default'}}</p>
  <p>{{$name1 or 'default'}}</p> --}}

  <!--3.原樣輸出-->
  {{-- <p>@{{$name}}</p> --}}

  {{-- 4.模板中的註釋 --}}

  {{-- 5.引入子視圖 include --}}
  @include('student.common1',['message'=>'我是錯誤訊息'])

  <br>
  @if($name=='酷寒戰士')
    我是酷寒戰士
  @elseif($name=='索爾')
    我是索爾
  @else
    我是誰
  @endif

  <br>
  @if(in_array($name,$arr))
    true
  @else
    false
  @endif

  <br>
  @unless($name!='酷寒戰士')<!--跟上面的用法相反-->
    我是酷寒戰士
  @endunless

  <br>
  {{-- @for($i=0;$i<10;$i++)
    <p>{{$i}}</p>
  @endfor --}}

  <br>
  {{-- @foreach($student as $student)
    <p>{{$student->name}}</p>
  @endforeach --}}

  {{-- @forelse($student as $student)
    <p>{{$student->name}}</p>
  @empty
    <p>null</p>
  @endforelse --}}

  <a href="{{url('url')}}">url()</a><!--常用方法,因為比較短-->
  <br>
  <a href="{{action('StudentController@urlTest')}}">action()</a><!--太長-->
  <br>
  <a href="{{route('url')}}">route()</a><!--常用方法,因為比較短-->
@stop
