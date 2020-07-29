<!DOCTYPE html>
<html lang="en">
    <head>	





<!--<html>
    <head></head>
<body>
   
    <form method = "post" action="">
        <input id ='vid' name = 'video'/>
        <br>
        <input type ='submit'/>
    </form>

  
        
    <div class="row">
        
        
        <div class= "col-md-6 col-md-offset-3">
        <form action="#">
            
            <p><input type="text" id="search" placeholder="type something.." autocomplete="off" class="form-control"/></p>
            <p><input type="submit" value="search" class="form-control btn btn-primary w100"></p>
            </form>
        
        <div id="results"></div>
        
        
        </div>
        
        
        
    
    </div>
    
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src= "app.js"></script>
    <script src="https://apis.google.com/js/client.js>onload=init"></script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </body>


</html> -->

<?php
    
    
if (isset($_POST['video']))
{
    $text=$_POST['video'];
    echo "video link : " . $text . "<br>";
    $text = preg_replace("#.*youtube\.com/watch\?v=#", "", $text);
    echo "the video Id: " . $text . "<br>";
    $text= '<iframe width="640" height ="360" src="https://www.youtube.com/embed/'.$text.' "frameborder ="0" allowfullscreen></iframe>';
    echo $text;

}

?>




















 </head>
    <body>
        <header>
            <h1 class="w100 text-center"><a href="index.html">YouTube Viral Search</a></h1>
        </header>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="#">
                    <p><input type="text" id="search" placeholder="Type something..." autocomplete="off" class="form-control" /></p>
                    <p><input type="submit" value="Search" class="form-control btn btn-primary w100"></p>
                </form>
                <div id="results"></div>
            </div>
        </div>
        
        <!-- scripts -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="js/app.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=init"></script>
    </body>
</html>


