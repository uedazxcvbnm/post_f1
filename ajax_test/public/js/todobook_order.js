Vue.createApp({
    //el: '#app',
    data: function(){
        return{
            todobooks: {},
            book_name: '' ,
        }
    },
    //phpmyadminで、book_priorityというカラムのnullを許可する必要があった
    methods:{
        add_todobook: function(){
            // comedianを追加する処理
            var self = this;
            axios.post('addtodobook',{
                book_name: self.book_name
            })
            self.book_name = ''
            //mounted()
            var self = this
            var url = '/ajax/todobook'
            axios.get(url).then(function(response){
                //var comedians = response.data
                //console.log(comedians)
                self.todobooks = response.data
            })
        },
        delete_todobook: function(id){
            //削除
            axios.delete('deletetodobook/' + id)
            //mounted()
            var self = this
            var url = '/ajax/todobook'
            axios.get(url).then(function(response){
                //var comedians = response.data
                //console.log(comedians)
                self.todobooks = response.data
            })
        },
        //[index]とDB上のindexは、必ずしも一致しない：一回消した後に新しく追加したフィールドは、現時点で使われていない番号が割り振られる
        update_todobook: function(index){
            var self = this
            axios.patch('updatetodobook/',{ 
                id:self.todobooks[index].id,
                name: self.todobooks[index].name
            })
            //console.log(self.comedians.id[Number(index)])
            //console.log(self.comedians.name[Number(index)])
            var url = '/ajax/comedian'
            axios.get(url).then(function(response){
                //var comedians = response.data
                //console.log(comedians)
                self.todobooks = response.data
            })
        },
    },
    //jsonデータをaxiosが返す
    mounted(){
        var self = this;
        var url = '/ajax/todobook';
        axios.get(url).then(function(response){
            //var comedians = response.data;
            //console.log(comedians);
            self.todobooks = response.data;
        });
    },    
}).mount("#app");