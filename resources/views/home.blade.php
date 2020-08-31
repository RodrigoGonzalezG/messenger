@extends('layouts.app')

@section('content')
    <b-container>
        <form action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}

            <button type="submit">Logout</button>
        </form>

        <b-row>
            <b-col cols="4"></b-col>
            <b-col cols="8"></b-col>
        </b-row>
    </b-container>
@endsection
