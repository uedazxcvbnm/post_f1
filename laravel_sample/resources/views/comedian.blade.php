<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <!--<script src="https://unpkg.com/vue@3.0.0/dist/vue.global.js"></script>-->
    </head>
    <body>
        <div id="app">
            <table></table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
        <script>

            new Vue({
                el: '#app',
                mounted() {
                    var url = '/ajax/comedian';
                    axios.get(url).then(function(response){
                        var comedians = response.data;
                        console.log(comedians);
                    });
                }
            });
        </script>
    </body>
</html>