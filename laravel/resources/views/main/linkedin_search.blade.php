@extends('layout')

@section('content')
    <div id="app">
        <div class="col-md-6">
        <form action="POST" @submit.prevent="doSearch" href="#">
        <form-group>
            <div class="row col-md-8">
            <input type="text" name="searchText" class="form-control" placeholder="Keywords to search">
            </div>
            <div class="col-md-4">
            <button class="btn btn-default" type="submit" >Search</button>
            </div>
        </form-group>
        </form>
        <table class="table">
            <thead>
            <th>Name</th>
            <th>Title</th>
            <th>Locality</th>
            <th>Industry</th>
            </thead>
            <tbody>
                <tr v-for = "o in linkedins">
                    <td>@{{ o.talent_name }}</td>
                    <td>@{{ o.talent_title }}</td>
                    <td>@{{ o.talent_locality }}</td>
                    <td>@{{ o.talent_industry }}</td>
                    <td><button class="btn btn-default" v-on:click="showDetail(o.id)">Detail</button></td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="col-md-6">
            <div id="detail">
                the detail
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="/js/main/linkedin_search.js"></script>
@endpush