@extends('layouts.master')
  
@section('content')
    @include('partials.errors')
  
  
 @include('partials.popular')
 @include('partials.collection')

 @include('partials.products')
 @include('partials.support')
 @include('partials.testimonal')


 @endsection