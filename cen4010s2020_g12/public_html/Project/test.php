<?php
    if (isset($_POST['submit']))
    {
        $url = $_POST['url'];
        $value = explode("v=", $url);
        $videoId = $value[1];
    }
    
    ?>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<title>CodePen Demo</title>
<meta name="robots" content="noindex">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
<link rel="canonical" href="https://codepen.io/colinlord/pen/oZNoOO">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style class="INLINE_PEN_STYLESHEET_ID">
    @import url("https://fonts.googleapis.com/css?family=Quattrocento+Sans");
@import url("https://fonts.googleapis.com/css?family=Oswald");
* {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}


.scrolling-wrapper {
  overflow-x: scroll;
  overflow-y: hidden;
  white-space: nowrap;
}
.scrolling-wrapper .card {
  display: inline-block;
}

.scrolling-wrapper-flexbox {
  display: -webkit-box;
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
}
.scrolling-wrapper-flexbox .card {
  -webkit-box-flex: 0;
          flex: 0 0 auto;
  margin-right: 3px;
}

.card {
  border: 2px solid #a6192d;
  background: black;
}

.scrolling-wrapper, .scrolling-wrapper-flexbox {
  height: 180px;
  margin-bottom: 0px;
  width: 100%;
  -webkit-overflow-scrolling: touch;
}

  </style>
<script src="https://static.codepen.io/assets/editor/iframe/iframeConsoleRunner-dc0d50e60903d6825042d06159a8d5ac69a6c0e9bcef91e3380b17617061ce0f.js"></script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js"></script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRuntimeErrors-29f059e28a3c6d3878960591ef98b1e303c1fe1935197dae7797c017a3ca1e82.js"></script>
<title>Cinemus</title>
    <script src="jquery-3.5.1.js"></script>
    <script>
    $( document ).ready(function() {
        console.log( "document loaded" );
    });
 
    $( window ).on( "load", function() {
        refreshData();
    });
	
    function refreshData(){
      $.get("roomload.php", function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        var res = data.split(",");
        var vidarray = [];
        for (var i=0; i<res.length-1; i++) {
          vidarray.unshift(res[i]);
        }
        $( "#content" ).html(vidarray[1]);
      });
    }
    </script>

    <!--<link rel="stylesheet" href="css/QueueStyle.css">-->
    
  <style>
      
      .container-fluid
      {
          padding-right: 0px;
          padding-left: 0px;
          margin-right: 0px;
          margin-left: 0px;
          padding-top: 0px;
          padding-bottom: 0px;
      }
      
      footer
      {
          padding: 0px;
      }
      
      body
      {
          overflow-x: hidden;
      }
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>

</head>

<body>
  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Cinemus</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
 
<div class="container-fluid text-center">    
  <div class="row content">
    
    <div class="col-sm-6">
      <h1>Welcome</h1>
      <div id="player"></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.


        // -----------------------------------------
        var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: 'M7lc1UVf-VE',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange

        //------------------------------------------------
          }
        });


      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
        player.loadVideoById("avcGP0FAzB8", 5, "large");
      }



      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }

    </script>
        

    </div>
    <div class="col-sm-2">
        <h1>Chat</h1>
         <div id="chatarea" data-style="auto"></div>
           <script type="text/javascript" src="chatfiles/chatfunctions.js"></script>

           <a href="http://coursesweb.net/php-mysql/" title="Web Programming Development Courses" id="cw">http://CoursesWeb.net</a>
      </div>
    </div>
  </div>

<footer class="container-fluid text-center">
  <div id="content" > </div>
    
    <h2>Show image thumbnail</h2>
        <div>
            <form method="post" action="">
            <input type="text" name="url" placeholder="Enter  URL Here">
                <input type="submit" name="submit">
            </form>
            <div class="thumbnail">
                <?php
               echo('<img src="https://img.youtube.com/vi/'.$videoId.'/0.jpg">');
                
                  ?>
                
                   
                
            </div>
        </div>
    
    
    
    <div class="scrolling-wrapper">
        
    <div class="card">
        <h6>Video 1</h6>
        <?php
            echo('<img src="https://img.youtube.com/vi/'.$videoId.'/0.jpg">'); 
        ?>
        </div>
        
    <div class="card"><h2>Card</h2></div>
    <div class="card"><h2>Card</h2></div>
    <div class="card"><h2>Card</h2></div>
    <div class="card"><h2>Card</h2></div>
    <div class="card"><h2>Card</h2></div>
    <div class="card"><h2>Card</h2></div>
    <div class="card"><h2>Card</h2></div>
    <div class="card"><h2>Card</h2></div>
  </div>
</footer>

</body>
</html>
