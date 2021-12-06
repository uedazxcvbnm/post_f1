<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href='css/dropdown_vue_test.css'>
        <link rel="stylesheet" href='css/topbutton_test.css'>
        <script src="https://unpkg.com/vue@3.0.0/dist/vue.global.js"></script>
    </head>
    <body>
        <header>
            <nav id="nav">
                <h1>読書管理アプリ</h1>
                <ul>
                    <li
                        v-for="item,index in items">
                        <a :href="item.url"
                        v-if="!item.children">
                            @{{ item.name }}
                        </a>
                        <span
                            v-else
                            v-on:mouseover="mouseover(index)"
                            v-on:mouseleave="mouseleave(index)">
                            @{{ item.name }}
        
                            <ul class=" dropdown"
                            :class="{ isOpen:item.sw}">
                                <li
                                    v-for="child in item.children">
                                    <a :href="child.url">
                                        @{{ child.name }}
                                    </a>
                                </li>
                            </ul>
                        </span>
                    </li>
                </ul>
            </nav>
        </header>
        <div id="app">
            <h1>読む順番</h1>
            <!--@{{ todobooks }}-->
            <!--追加-->
            <table>
            <td><input type="text" v-model="book_name"></td>
            <td><input type="text" v-model="book_priority" style="width:1.5em"></td>
            <td><input type="button" value="追加" id="button2" v-on:click="add_todobook"></td>
            <table>
            <!--追加-->
            <table> 
            <div v-for="(todobook,index) in todobooks"> <!--todobooksをtodobookに入れている、(todobook,index)-->
            <tr>
                <div>
                    <span v-if="validation(index)"><br></span>    
                    <td><input type="text" v-model="todobook.book_name"></td>
                    <td><input type="text" v-model="todobook.book_priority" style="width:1.5em"></td>
                    <!--<td><input type="button" value="編集" v-on:click="update_todobook"></td>-->
                    <td><input type="button" value="更新" v-on:click="update_todobook(index)"></td>
                    <td><input type="button" value="削除" v-on:click="delete_todobook(todobook.id)"></td>
                </div>
                
            </tr>
            </div>
            </table>
            
        </div>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
        <div id="page_top"><a href="#"></a></div>
        <script type="text/javascript" src='js/dropdown_memo_test.js'></script>
        <!--<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"><script>動かなかった-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
        <script>
            //new 
            Vue.createApp({
                //el: '#app',
                data: function(){
                    return{
                        todobooks: {},
                        book_name: '' ,
                        book_priority: ''
                    }
                }, 
                
                //phpmyadminで、book_priorityというカラムのnullを許可する必要があった
                //this.todobook thisがいる
                methods:{
                    validation:function(index){
                            if (index>0) {
                                if(this.todobooks[index].book_priority != this.todobooks[index-1].book_priority){
                                    return 'あいうえお';
                                }

                            }
                            else{
                                return 'かきくけこ';
                            }    
                                                                                                                                     
                    },
                    add_todobook: function(){
                        // comedianを追加する処理
                        var self = this;
                        axios.post('addtodobook',{
                            book_name: self.book_name,
                            book_priority: self.book_priority
                        })
                        self.book_name = ''
                        self.book_priority = ''
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

                        //console.log(self.todobooks[index].id)
                        //console.log(self.todobooks[index].book_name)

                        axios.patch('updatetodobook/',{ 
                            id:self.todobooks[index].id,
                            book_name: self.todobooks[index].book_name,
                            book_priority: self.todobooks[index].book_priority
                        })
                        
                        var url = '/ajax/todobook'
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
        </script>
    </body>
</html>

