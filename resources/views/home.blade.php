@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div>
                            <ul>
                                @foreach($users->items() as $val)
                                    <li>
                                        <a href="/user/view/{{ $val->id }}">{{ $val->name }}</a>
                                        <a href="/user/edit/{{ $val->id }}">edit</a>
                                        <a href="/user/remove/{{ $val->id }}">delete</a>
                                    </li>
                                @endforeach

                                {!! $users->render() !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
