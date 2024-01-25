@extends('layouts.app')

@section('content')
<div id="app">
    <c-panel-component :modules="{{ $modules }}"><c-panel-component/>
</div>
@endsection
