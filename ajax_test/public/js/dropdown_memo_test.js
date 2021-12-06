Vue.createApp({
    data: function(){
        return{
            items: [
                {
                    index: 0,
                    sw:false,
                    url: '#',
                    name: 'ファイル',
                    children: [
                        {
                            url: '#',
                            name: '新しいファイル'
                        },
                        {
                            url: '#',
                            name: 'ファイルを開く'
                        },
                        {
                            url: '#',
                            name: '保存'
                        },
                        {
                            url: '#',
                            name: '名前を付けて保存'
                        },
                        {
                            url: '#',
                            name: '保存済みを閉じる'
                        },
                    ]
                },
                {
                    index: 1,
                    sw:false,
                    url: '#',
                    name: '登録',
                    children: [
                        {
                            url: '#',
                            name: 'お気に入り'
                        },
                        {
                            url: '#',
                            name: '閲覧履歴'
                        },
                        
                    ]
                },
                /*{
                    url: '#',
                    name: 'Contact'
                }*/
            ]
        }
    },

    methods: {
        mouseover: function (index) {
            //this.isOpen = true;
            this.items[index].sw=true; //sw(スイッチ変数（自作）)
        },
        mouseleave: function (index) {
            //this.isOpen = false;
            this.items[index].sw=false;
        }
    }
}).mount('#nav');