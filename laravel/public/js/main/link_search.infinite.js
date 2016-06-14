/**
 * Created by Administrator on 2016/6/10.
 */
var app = angular.module("myapp",['infinite-scroll']);

// 创建后台数据交互工厂
app.factory('Demo', function ($http) {
    var Demo = function () {
        this.items = [];
        this.busy = false;
        //this.after = '';
        this.page = 0;
        this.detail = 'abcdetail';
    };

    Demo.prototype.nextPage = function () {
        if (this.busy) return;
        this.busy = true;

        var _start = this.page * 5;

        var url = "http://localhost:8080/solr/collection1/select/?q=*%3A*&start="+_start+"&rows=5&wt=json";
        //var url = "http://192.168.3.95:7002/api/post/nextpage?id=" + this.page + "&callback=JSON_CALLBACK";
        $http.get(url).success(function (data) {
            //var items = data;
            //for (var i = 0; i < items.length; i++) {
            //    this.items.push(items[i]);
            //}
            this.items =  data.response.docs;
            //this.after = "t3_" + this.items[this.items.length - 1].id;
            this.busy = false;
            this.page += 1;
        }.bind(this));
    };

    Demo.prototype.showDetail = function(id) {
        console.log(id);
        var url = "http://127.0.0.1:8080/solr/collection1/select/?q=id%3A"+id+"&start=0&rows=1&wt=json";
        $http.get(url).success(function(data){
            this.detail = data.response.docs[0].talent_profile;
        }.bind(this));
    };

    return Demo;
});


app.controller("ctrl1",function($scope,Demo){
    $scope.demo =  new Demo();
});