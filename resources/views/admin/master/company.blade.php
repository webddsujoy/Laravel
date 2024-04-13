@extends('layouts.master')
@section('title')
    Company - {{ env('APP_NAME') }}
@endsection
@section('content')
<h1>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</h1>
@endsection
@section('scripts')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/assets/admin')}}/js/common/datatables.js"></script>
<script src="{{asset('/assets/admin')}}/js/custom/admin_management.js"></script>
@endsection