@extends('chunks.template')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <ul>
                <li>{{$user->name}}</li>
                <li>{{$user->email}}</li>
            </ul>
        </div>
    </div>
</div>
@endsection