/**
 * Created by Administrator on 2016/6/10.
 */
var app = angular.module("myapp",['angularUtils.directives.dirPagination']);
app.controller("ctrl1",function($scope,$http){
    $scope.talents = [];
    $scope.totalTalents = 0;
    $scope.talentsPerPage = 15;
    $scope.keywords = "";
    $scope.pagination = {current:1};
    getResultsPage($scope.pagination.current);
    $scope.pageChanged = function(newPage){
        getResultsPage(newPage);
    }
    function getResultsPage(pageNumber){
        var _start = (pageNumber-1)*$scope.talentsPerPage;
        var _query = "*%3A*";
        var _key = $scope.keywords;
        if(_key)
        {
            _query = "talent_keywords%3A"+_key;
        }

        //var url = "http://localhost:8080/solr/collection1/select/?q=*%3A*&start="+_start+"&rows="+$scope.talentsPerPage+"&wt=json";
        var url = "http://localhost:8080/solr/collection1/select/?q="+_query+"&start="+_start+"&rows="+$scope.talentsPerPage+"&wt=json";
        $http.get(url)
            .success(function(result) {
                $scope.talents = result.response.docs;
                $scope.totalTalents = result.response.numFound
            });
    }
    $scope.doSearch = function(){
        console.log($scope.keywords);
        getResultsPage(1);
    };
    $scope.showthis  = function(id){
        console.log(id);
        var url = "http://127.0.0.1:8080/solr/collection1/select/?q=id%3A"+id+"&start=0&rows=1&wt=json";
        $http.get(url).success(function(data){
            $scope.mdetail = data.response.docs[0].talent_profile;
            //console.log(data.response.docs[0]);
        });
        //$scope.mdetail =
    };
    //$scope.links=[];
})