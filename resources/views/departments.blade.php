@extends('layouts.app')

@section('content')

<div id="departments-list">
    <departments-list 
        :content = "{{json_encode($content)}}"
    >
    </departments-list>
</div>

@endsection