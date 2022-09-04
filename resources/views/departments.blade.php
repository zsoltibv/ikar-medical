@extends('layouts.app')

@section('content')

<div id="departments-list">
    <departments-list 
        :categories="{{json_encode($categories)}}" 
        :content="{{json_encode($content)}}">
    </departments-list>
</div>

@endsection