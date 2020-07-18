<?php
    $mysqli = new mysqli("localhost", "cen4010s2020_g12", "faueng2020", "cen4010s2020_g12");
    if ($mysqli -> connect_errno) {
        echo $mysqli -> connect_error . "ERROR: Could not initialize connection with database.";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en" class="m-5">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Personal CSS -->
        <link rel="stylesheet" href="../css/test.css">
        <title>Vertical Prototype</title>
    </head>
    <body>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link border mr-1 active" id="nav-database-tab" data-toggle="tab" href="#nav-database" role="tab" aria-controls="nav-database" aria-selected="true">Database</a>
                <a class="nav-item nav-link border mx-1" id="nav-youtube-tab" data-toggle="tab" href="#nav-youtube" role="tab" aria-controls="nav-youtube" aria-selected="false">YouTube API</a>
                <a class="nav-item nav-link border ml-1" id="nav-chat-tab" data-toggle="tab" href="#nav-chat" role="tab" aria-controls="nav-chat" aria-selected="false">Chat</a>
            </div>
        </nav>
        <div class="tab-content border p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-database" role="tabpanel" aria-labelledby="nav-database-tab">
                <div class="form">
                    <label for="tablechoose">Choose a table: </label>
                    <select id="tablechoose">
                    <?php
                    $query = "SHOW tables;";
                    $result = $mysqli->query($query);
                    while ($table = $result->fetch_array()) {
                        $name = $table[0];
                        echo "<option value=" . $name . ">" . $name . "</option>";
                    }
                    ?>
                    </select>
                    <br>
                    <button class="btn btn-primary" id="view">View Table</button>
                </div>
                <div id="output"></div>
            </div>
            <div class="tab-pane fade" id="nav-youtube" role="tabpanel" aria-labelledby="nav-youtube-tab">
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
            <div class="tab-pane fade" id="nav-chat" role="tabpanel" aria-labelledby="nav-chat-tab"><div id="chatarea" data-style="auto"></div>
<script type="text/javascript" src="chatfiles/chatfunctions.js"></script></div>
        </div>
        <!-- Personal JS -->
        <script src="../js/test.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
