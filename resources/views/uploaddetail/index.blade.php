@extends('layouts.app')

@section('content')
<div>{{ Session::get('user_name')}}</div>

@endsection