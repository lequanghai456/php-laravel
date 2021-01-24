<?php
    $path =  Config::get('paths.path.admin');
    $title = "Tables";
?>
@extends("{$path}.layout-admin")
@section("menu")
    @include("{$path}.menu-admin")
@endsection
@section("search")
    @include("{$path}.search-admin")
@endsection
@section("content")
    @include("{$path}.tables-content")
@endsection
