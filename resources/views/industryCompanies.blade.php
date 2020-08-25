@extends('layouts.app')

@section('title', 'Industry Companies')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">CIN</th>
            <th scope="col">Name</th>
            <th scope="col">Class</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
        <tr>
            <th>{{$company->cin}}</th>
            <td>
                <a class="nav-link" 
           href="/business/{{$company->slug}}">
            {{$company->name}}</a>
                </td>
            <td>{{$company->class}}</td>
            <td>{{$company->status}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection