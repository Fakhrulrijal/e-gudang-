@extends('layouts.app')

@section('title', 'Data user')
@section('MenuSuperAdminUser', 'active')

@section('content')
    @livewire('superadmin.user.index')
@endsection
{{-- @livewire('superadmin.user.index') --}}