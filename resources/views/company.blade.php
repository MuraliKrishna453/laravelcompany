@extends('layouts.app')

@section('title', 'Company')

@section('content')
@if(isset($company))
<ul class="list-group">
  <li class="list-group-item">{{$company->name}}</li>
  <li class="list-group-item">{{$company->cin}}</li>
    <li class="list-group-item">{{$company->class}}</li>
  <li class="list-group-item">{{$company->status}}</li>
</ul>
@endif
@endsection