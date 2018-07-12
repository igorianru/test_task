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
                                <li>Name: {{ $user->name }}</li>
                                <li>Email: {{ $user->email }}</li>
                                <li>Text: {{ $user->text }}</li>
                                <li>Description: {{ $user->description }}</li>
                                <li>Colors: {{ $user->colors }}</li>
                                <li>Abilities: {{ $user->abilities }}</li>
                                <li>Points: {{ $user->points }}</li>

                                <li>Group: {{ $user->groups->name }}</li>
                                <li>Messages: {{ $user->messages->name }}</li>
                                <li>Scraps: {{ $user->scraps->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
