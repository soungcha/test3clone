@extends('layout2')
@section('content')
    <div ng-app="myapp" ng-controller="ctrl1">
        <div class="col-md-6">
            <div>
                <form-group>
                    <div class="row col-md-8">
                        <input type="text" name="searchText" class="form-control" ng-model="keywords"  placeholder="Keywords to search">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-default" type="submit" ng-click="doSearch()" >Search</button>
                    </div>
                </form-group>
            </div>
            <table class="table">
                <thead>
                <th>Name1</th>
                <th>Title</th>
                <th>Locality</th>
                <th>Industry</th>
                <th>Operation</th>
                </thead>
                <tbody>
                <tr dir-paginate = "x in talents| itemsPerPage:talentsPerPage" total-items="totalTalents" current-page="pagination.current">
                    <td>@{{x.talent_name}}</td>
                    <td>@{{x.talent_title}}</td>
                    <td>@{{x.talent_locality}}</td>
                    <td>@{{x.talent_industry}}</td>
                    <td><button class="btn btn-default" ng-click="showthis(x.id)">Detail</button></td>
                </tr>
                </tbody>
            </table>
            <dir-pagination-controls max-size="4" direction-links="true" boundary-links="true" on-page-change="pageChanged(newPageNumber)" ></dir-pagination-controls>
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