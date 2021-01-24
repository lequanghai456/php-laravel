<?php
    $path =  Config::get('paths.path.admin');
    $title = "Dashboard"
?>
@extends("{$path}.layout-admin")
@section("menu")
    @include("{$path}.menu-admin")
@endsection
@section("search")
    @include("{$path}.search-admin")
@endsection
@section("content")
    @include("{$path}.dashboard-content")
@endsection
