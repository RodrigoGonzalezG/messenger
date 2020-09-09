@extends('layouts.app')

@section('content')
    <b-container fluid style="height: calc(100vh - 56px);">
        <b-row class="h-100" no-gutters>
            <b-col cols="3">
                <contact-list-component></contact-list-component>
            </b-col>
            <b-col cols="9">
                <active-conversation-component></active-conversation-component>
            </b-col>
        </b-row>
    </b-container>
@endsection
