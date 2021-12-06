//todoリスト追加後
Vue.createApp({
    data: function(){
        return{
            newItem: '',  // 入力した文字のデータを反映させる
            todos: [] // 入力したリストのデータを格納する
        }
    },
    methods: {
      addItem: function(event) {
        if(this.newItem == '') return;  // newItemが空なら最初に戻る　よく使う
         // 後のことを考えtodosに格納するオブジェクトを作成しておく
        var todo = {
          item: this.newItem, // このnewItemはdataのnewItem
          isDone: false //チェックボックスの状態
        };
        //作成したオブジェクトをtodosに入れる(push：配列の末尾に要素を追加)
        this.todos.push(todo);//配列を追加
        this.newItem = '';  // newItemが空になり空欄化される
      },
      //削除
      deleteItem: function(index) {
        this.todos.splice(index, 1);
      }
    }
}).mount('#app')