<html>
    <head>
        <link href="asset/css/bootstrap.min.css" rel="stylesheet">
        <script src="asset/js/bootstrap.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
    </head>
    <body>
        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1731609087081062',
      xfbml      : true,
      version    : 'v2.6'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">jaimovie</a>
                    
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>
        <h1 id="fb-welcome"></h1>
        
        // Place following code after FB.init call.

function onLogin(response) {
  if (response.status == 'connected') {
    FB.api('/me?fields=first_name', function(data) {
      var welcomeBlock = document.getElementById('fb-welcome');
      welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
    });
  }
}

FB.getLoginStatus(function(response) {
  // Check login status on load, and if the user is
  // already logged in, go directly to the welcome message.
  if (response.status == 'connected') {
    onLogin(response);
  } else {
    // Otherwise, show Login dialog first.
    FB.login(function(response) {
      onLogin(response);
    }, {scope: 'user_friends, email'});
  }
});




        <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><img src="asset/image/logo.jpg" height="150px" width="1100px"></div>
            
            </div>
        </div>
        <br><br>
        <div class="container">
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">វីឌីអូបង្រៀន</div>  
                        <div class="col-sm-12">
                            <br>
                            <table border="1px">
                                <thead>
                                    <th>Apple</th>
                                    <th>Book</th>
                                    <th>Car</th>
                                    <th>Dog</th>
                                </thead>
                                <tbody>
                                    <td>apple</td>
                                    <td>book</td>
                                    <td>car</td>
                                    <td>dog</td>
                                </tbody>
                            </table> 
                        </div>    
                        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                    </div>
                </div>
            </div>
        
                        
<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="http://www.jaimovie.com">www.jaimovie.com</a></p> 
</footer>
        
        
    </body>
         
</html>