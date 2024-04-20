<!-- resources/views/layouts/admin.blade.php -->

@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <!-- Additional content or customization for administrators -->
    <div>
        <p>Welcome, Admin!</p>
        @yield('admin_content')
    </div>
@endsection
