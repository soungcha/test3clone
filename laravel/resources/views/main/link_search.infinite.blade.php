@extends('layout2')
@section('content')
    <div ng-app="myapp" ng-controller="ctrl1">
        <div class="col-md-6">
            <div infinite-scroll='demo.nextPage()' infinite-scroll-disabled='demo.busy' infinite-scroll-distance='1'>
                <div ng-repeat='item in demo.items'>
                    <p>
                        <input type="hidden" value="@{{item.id}}" />
                        <label>@{{item.talent_name}}</label>
                        <label>@{{item.talent_title}}</label>
                        <label>@{{item.talent_locality}}</label>
                        <label>@{{item.talent_industry}}</label>
                        <button class="btn btn-default" ng-click="demo.showDetail(item.id)">Detail</button>
                    </p>
                </div>
                <div ng-show='demo.busy'>Loading data...</div>
            </div>

        </div>
        <div class="col-md-6">
            <div id="detail">
                @{{demo.detail}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="/js/main/link_search.js"></script>
@endpush