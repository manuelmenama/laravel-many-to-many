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
                <th scope="col">Type Edit</th>
                <th scope="col">Project count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>
                        <form action="{{route('admin.types.update', $type)}}" method="POST" class="d-flex">
                            @csrf
                            @method('PATCH')
                            <input type="text" class="form-control border-0 me-2" value="{{$type->name}}">
                            <button type="submit" class="btn btn-warning me-2"><i class="fa-solid fa-arrow-rotate-left"></i></button>
                        </form>
                    </td>
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
