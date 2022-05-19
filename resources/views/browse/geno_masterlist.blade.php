@extends('layouts.app')

@section('title') geno Slot Masterlist @endsection

@section('sidebar')
    @include('browse._sidebar')
@endsection

@section('content')
{!! breadcrumbs(['geno Slot Masterlist' => 'genos']) !!}
<h1>geno Slot Masterlist</h1>

@include('browse._masterlist_content', ['characters' => $slots])

@endsection

@section('scripts')
@include('browse._masterlist_js')
@endsection