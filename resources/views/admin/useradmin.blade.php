<?php
    $path =  Config::get('paths.path.admin');
    $title = "User Profile"
?>
@extends("{$path}.layout-admin")
@section("menu")
    @include("{$path}.menu-admin")
@section("search")
    @include("{$path}.search-admin")
@endsection
@endsection
@section("content")
    @include("{$path}.useradmin-content")
@endsection
