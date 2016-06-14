/**
 * Created by Administrator on 2016/6/10.
 */
var app = angular.module("myapp",[]);
app.controller("ctrl1",function($scope,$http){
    $scope.thename = "ab1c";
    var app = this;
    var url = "http://localhost:8080/solr/collection1/select/?q=*%3A*&start=30&rows=5&wt=json";
    $http.get(url).success(function(data){
       console.log(data);
        $scope.links = data.response.docs;
    });
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