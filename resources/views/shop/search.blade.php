<?php

?>
@extends('layouts.master')

@section('title')
    Search Page
@endsection

@section('content')
<div class="row">
<form action="{{route('search.index')}}" method="post">
<input type="text" name="search" id="search" placeholder="Search..."/>
<button type="submit" >Search </button>


{{ csrf_field()}}
</form>

</div>

@endsection
