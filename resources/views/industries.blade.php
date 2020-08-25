@extends('layouts.app')

@section('title', 'Industries')

@section('content')
<ul class="list-group">
    @foreach($industries as $industry)
    <li class="list-group-item">
        <a class="nav-link" 
           href="/industry/section/{{$industry->section}}">
            {{$industry->name}}</a>
    </li>
    @endforeach
</ul>
@endsection