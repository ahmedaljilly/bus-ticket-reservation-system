<!DOCTYPE html>
  <html>
  <head>
    <link href="https://unpkg.com/vuesax@4.0.1-alpha.16/dist/vuesax.min.css" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  </head>
  <body>
    <div id="front">
      <vs-button>Hello World</vs-button>
    </div>

    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vuesax@4.0.1-alpha.16/dist/vuesax.min.js"></script>
    <script>
      new Vue({
        el: '#front'
      })
    </script>
  </body>
  </html>