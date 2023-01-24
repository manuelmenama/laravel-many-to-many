@extends('layouts.app')

@section('title')
    | Type Editor
@endsection

@section('content')

<div class="container mt-5">


    @if (session('message'))

        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif


    <table class="table w-50">
        <thead>
            <tr>
                <th scope="col">Type name</th>
                <th scope="col">Action</th>
                <th scope="col">Project count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{$type->name}}</td>
                    <td>
                        {{-- mettere bottoni --}}
                    </td>
                    <td>
                        <span class="badge rounded-pill text-bg-secondary">{{count($type->projects)}}</span>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
