@extends('templates.admin')

@section('administration')
    @include('admins.user')
    @include('admins.skill')
    @include('admins.fact')
    @include('admins.portfolio')
@endsection