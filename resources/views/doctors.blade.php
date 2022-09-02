@extends('layouts.app')

@section('content')

{{-- @foreach ($name as $key => $data)
    {{$data}}
@endforeach --}}

<div id="doctors-list">
    <doctors-list
        :name = "{{json_encode($name)}}"
        :pic_path ="{{json_encode($pic_path)}}"
        :area = "{{json_encode($area)}}"
        :unique_area = "{{json_encode($unique_area)}}"
        >
    </dcotors-list>
</div>

@endsection