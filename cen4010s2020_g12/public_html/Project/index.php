<?php        
session_start();
if (!isset($_SESSION["username"])) { //this block runs if user is not logged in
   header("Location: login.php");   //redirect to login page
   die;
} 
else {
    $username = $_SESSION["username"];    //store username as variable
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
    <title>Cinemus Demo</title>
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
        
        #player {
            z-index: -1;
        }
        
        #playercontainer {
            background: transparent;
            z-index: 5;
            vertical-align: middle;
        }
        
        #emptymessage {
            position: absolute;
            text-align: center;
            
            top: 0%;
            left: 0%;
        }
    </style>
    
    <script src="https://static.codepen.io/assets/editor/iframe/iframeConsoleRunner-dc0d50e60903d6825042d06159a8d5ac69a6c0e9bcef91e3380b17617061ce0f.js"></script>
    <script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js"></script>
    <script src="https://static.codepen.io/assets/editor/iframe/iframeRuntimeErrors-29f059e28a3c6d3878960591ef98b1e303c1fe1935197dae7797c017a3ca1e82.js"></script>
    <title>Cinemus</title>
        <script src="jquery-3.5.1.js"></script>
        <script>
        function refreshData() {
          $.get("roomload.php", function(data, status) {
            //alert("Data: " + data + "\nStatus: " + status);
            /*
            var res = data.split(",");
            var vidarray = [];
            for (var i=0; i<res.length-1; i++) {
              vidarray.unshift(res[i]);
            }
            for (var i=0; i<vidarray.length; i++) {
              console.log(vidarray[i]);
            }
            $( "#content" ).html(vidarray[1]);
            */
          });
        }
        </script>

    <!--<link rel="stylesheet" href="css/QueueStyle.css">-->
    
    <style>
        .container-fluid {
            padding-right: 0px;
            padding-left: 0px;
            margin-right: 0px;
            margin-left: 0px;
            padding-top: 0px;
            padding-bottom: 0px;
        }
      
        footer {
            padding: 0px;
        }
      
        body {
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
      
        .videoTn {
            width: 180px;
            height: 120px;
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
                <a class="navbar-brand ml-3" href="#">Cinemus</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Cinemus</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="create_account.php">Create Account</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logged in as <strong><?php echo $username; ?></strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
 
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-6">
            <h1>Welcome</h1>
            <div id="playercontainer" class="mx-4">
                <div id="player"></div>
            </div>

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
                height: "100%",
                width: "100%",
                events: {
                    'onReady': readVideo,
                    // 'onStateChange': stateChange,
                }
            });    
        }
        
        /*var lastStateChange = new Date();
        function stateChange(event) {            //runs when player's state changes
            if ((new Date() - lastStateChange > 3000) && event.data == YT.PlayerState.PLAYING) {  //only read from video if it's been at least 3 seconds since last call, to prevent infinite loops
                readVideo();
                lastStateChange = new Date();
            }
        }*/
        
        var queueEmpty = false, lastTime = -1;
        function readVideo() {
            $.post("visualqueue.php", function(data) {
                if ($("#content-area").html().trim() != data.trim()) {
                    $("#content-area").html(data.trim());
                }
                
                if (data.trim() == "") {
                    $("#content-area").html("<h3 id=\"emptymessage\" class=\"text-danger\">The video queue is empty.</h3>");
                    $("#playercontainer").css("background", "black");
                    queueEmpty = true;           //if queue is empty, set empty to true indefinitely
                }
            });
            
            $.ajax({
                method: "GET",
                url: "encodevideo", 
                success: function(data) {
                    if (data == "empty") {
                        return;
                    }
                    
                    var start = data.indexOf("="),
                        separator = data.indexOf(",");

                    var id = data.substr(start + 1, 11),    //the ID of the encoded video
                        time = data.substr(separator + 1),  //the timestamp of the encoded video
                        currentURL = player.getVideoUrl(),  //the URL of the currently played video
                        currentIDIndex = currentURL.lastIndexOf("=") + 1,   //string index of beginning of video ID
                        currentID = currentURL.substr(currentIDIndex, 11);  //id of currently played video

                    if (time == lastTime) {
                        console.log("error: cannot read from video");
                    }

                    lastTime = time;

                    console.log("empty = " + queueEmpty +
                                "\nplayerstate = " + player.getPlayerState() + 
                                "\nencodevideo says " + id + " at " + time + " seconds" + 
                                "\ncurrent ID is " + currentID + " at " + player.getCurrentTime() + " seconds");    //extract ID from URL
                    
                    var timeOff = Math.abs(time - player.getCurrentTime());

                    if  (id != currentID ||               //always reload if new video detected
                        (!queueEmpty &&                       //otherwise, reload if queue has anything in it and the video has ended
                        player.getPlayerState() == 0 ||
                        (player.getPlayerState() == 1 && timeOff > 4))) {  //or if video is playing and the time difference is high

                        player.loadVideoById(id, time);

                        if (id != currentID) {
                            queueEmpty = false;              //if new video is being played, set empty to false indefinitely (there must be new queue item)
                            $("#playercontainer").css("background", "transparent");
                        }
                    }
                    
                },
                fail: function() {
                    console.log("ERROR: Fail callback called.");
                },
            });
        }
        
        setInterval(readVideo, 3000);
        
        
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
    <div class="scrolling-wrapper" id="content-area"></div>
</footer>
    
    <div class="form">
        <label for="videoid">Enter a YouTube video ID here: </label>
        <input type="text" id="videolink" required><br><br>
        <button class="btn btn-secondary" id="addvideo">Add Video</button>
    </div>
    
    <script>
        function addVideo() {
            var videoLink = $("#videolink").val().trim(),
                start = videoLink.indexOf("="),
                separator = videoLink.indexOf(",");

            var videoID = videoLink.substr(start + 1, 11);    //the ID of the encoded video

            console.log("https://www.googleapis.com/youtube/v3/videos?part=id&id=" + videoID + "&key=AIzaSyBiI3RW4tTmXKWV1GyUU8IsLUyfzBHVuAE");
            $.get("https://www.googleapis.com/youtube/v3/videos", {part: "id", id: videoID, key: "AIzaSyBiI3RW4tTmXKWV1GyUU8IsLUyfzBHVuAE"}, function(data) {
                console.log("validate\n" + data);
                console.log(data.pageInfo.totalResults);
                console.log((data.pageInfo.totalResults != 0) + "\nend validate");
                var valid = data.pageInfo.totalResults != 0;
                
                console.log("input: " + videoLink);
                if (!valid) {
                    console.log("invalid ID, somehow");
                } else {
                    $.ajax({ 
                        method: "POST",
                        url: "addvideo.php", 
                        data: {vidID: videoLink}, 
                        dataType: "text",
                        success: function(result) {
                            console.log("result: " + result);
                        },
                    });
                }
            });
        }
        
        $("#addvideo").click(addVideo);
    </script>
</body>
</html>
