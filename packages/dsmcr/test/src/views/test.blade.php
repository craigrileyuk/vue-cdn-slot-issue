@extends('layouts.app')

@section('content')
    <test-component></test-component>
@endsection

@push('vue-scripts')
    <script src="/js/test-components.js"></script>
@endpush
