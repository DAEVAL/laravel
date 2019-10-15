@extends('layouts.master')
@section('content')
    <p>Hello {{$name}}</p>
    <P>상속 테스트</P>
@endsection
<ul>
@foreach($data as $val)
    <li>{{$val}}</li>
@endforeach
</ul>
@include('layouts.footer')
{{phpinfo()}}

