<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <script src="https://unpkg.com/vue@3.0.0/dist/vue.global.js"></script>
    </head>
    <body>
        <div id="app">
            <h1>お笑い芸人リスト</h1>
            <!--@{{ comedians }}-->
            <table>
            <tr v-for="(comedian,index) in comedians"> <!--comediansをcomedianに入れている、(comedian,index)-->
                <td><input type="text" v-model="comedian.name"></td>
                <!--<td><input type="button" value="編集" v-on:click="update_comedian"></td>-->
                <td><input type="button" value="更新" v-on:click="update_comedian(index)"></td>
                <td><input type="button" value="削除" v-on:click="delete_comedian(comedian.id)"></td>
            </tr>
            </table>
            <p><input type="text" v-model="name"></p>
            <p><input type="button" value="追加" id="button2" v-on:click="add_comedian"></p>
        </div>

        <!--<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"><script>動かなかった-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
        <script>

            //new 
            Vue.createApp({
                //el: '#app',
                data: function(){
                    return{
                        comedians: {},
                        name: '' ,
                    }
                },
                methods:{ 
                    add_comedian: function(){
                        // comedianを追加する処理
                        var self = this;
                        axios.post('addcomedian',{
                            name: self.name
                        })   
                        self.name = ''
                        //mounted()
                        var self = this
                        var url = '/ajax/comedian'
                        axios.get(url).then(function(response){
                            //var comedians = response.data
                            //console.log(comedians)
                            self.comedians = response.data
                        })
                    },
                    delete_comedian: function(id){
                        //削除
                        axios.delete('deletecomedian/' + id)
                        //mounted()
                        var self = this
                        var url = '/ajax/comedian'
                        axios.get(url).then(function(response){
                            //var comedians = response.data
                            //console.log(comedians)
                            self.comedians = response.data
                        })
                    },
                    //[index]とDB上のindexは、必ずしも一致しない：一回消した後に新しく追加したフィールドは、現時点で使われていない番号が割り振られる
                    update_comedian: function(index){
                        var self = this
                        axios.patch('updatecomedian/',{ 
                            id:self.comedians[index].id,
                            name: self.comedians[index].name
                        })
                        //console.log(self.comedians.id[Number(index)])
                        //console.log(self.comedians.name[Number(index)])
                        var url = '/ajax/comedian'
                        axios.get(url).then(function(response){
                            //var comedians = response.data
                            //console.log(comedians)
                            self.comedians = response.data
                        })
                    },

                },
                mounted(){
                    var self = this;
                    var url = '/ajax/comedian';
                    axios.get(url).then(function(response){
                        //var comedians = response.data;
                        //console.log(comedians);
                        self.comedians = response.data;
                    });
                },
            }).mount("#app");
        </script>
    </body>
</html>