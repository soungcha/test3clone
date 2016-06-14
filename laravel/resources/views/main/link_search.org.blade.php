@extends('layout2')
@section('content')
    <div ng-app="myapp" ng-controller="ctrl1">
        <div class="col-md-6">
            <table class="table">
                <thead>
                <th>Name1</th>
                <th>Title</th>
                <th>Locality</th>
                <th>Industry</th>
                <th>Operation</th>
                </thead>
                <tbody>
                <tr ng-repeat = "x in links">
                    <td>@{{x.talent_name}}</td>
                    <td>@{{x.talent_title}}</td>
                    <td>@{{x.talent_locality}}</td>
                    <td>@{{x.talent_industry}}</td>
                    <td><button class="btn btn-default" ng-click="showthis(x.id)">Detail</button></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <div id="detail">
                @{{mdetail}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="/js/main/link_search.js"></script>
@endpush