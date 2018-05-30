{{ Session::get('message') }}

@inject('users', 'App\User')

@extends('base')

@section('content')

{{ $users::find(3) }}



@endsection
