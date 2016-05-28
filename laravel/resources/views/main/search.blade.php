@extends('layout')

@section('content')
    <div id="app">
        <table class="table">
            <thead>
            <th>name</th>
            <th>title</th>
            <th>phone</th>
            <th>location</th>
            <th>avatar</th>
            </thead>
            <tbody>
            @foreach($data as $v)
            <tr >
                <td><a href="{{$v->srclink  }}">{{ $v->name }}</a> </td>
                <td>{{ $v->title }}</td>
                <td>{{ $v->phone }}</td>
                <td>{{ $v->location }}</td>
                <td><img src="{{ $v->imgurl }}"></td>
            </tr>
            @endforeach
            </tbody>
            <div class="page_list">
                {{$data->links()}}
            </div>
        </table>
    </div>
@endsection

@push('scripts')
<script src="/js/main/search.js"></script>
@endpush