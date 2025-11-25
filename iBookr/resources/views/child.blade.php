@extends('layouts.app')

@section('title', 'Page Title')

@section('header')
<div class="header ">
    @include('include.search')
    @include('include.job')
</div>
@endsection

@section('action')
<div class="action">
    @include('include.synkron')
</div>
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-center">
    <div class="border border-dashed border-2 border-secondary-subtle rounded-4 p-4 my-5 container">
        <table class="table table-hover">
            @include('include.thead')
            @include('include.list')
        </table>
    </div>
</div>
@endsection

@section('footer')
<div class="container-sm border-bottom border-dotted border-2 d-flex align-items-center justify-content-center">
    @include('include.pagination')
</div>
@endsection