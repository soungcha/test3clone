/**
 * Created by Administrator on 2016/5/28.
 */
new Vue({
    http: {
        root: '/root',
        headers: {
            'Access-Control-Allow-Origin' : '*',
            'Content-Type': 'text/plain'
        },
        xhr:{
            withCredentials: true
        }
    },

    el:"#app",
    data:{

    },
    methods:{
        fetch_Linkedin:function(){
            var url = "http://localhost:8080/solr/collection1/select/?q=*%3A*&start=0&rows=10&wt=json";
            this.$http.get(url,function(data){
                this.$set('linkedins',data.response.docs);
                console.log(data.response.docs);
            })
        },
        showDetail:function(id){
            console.log(id);
        }
    },
    ready:function(){
        this.fetch_Linkedin();
    }
});