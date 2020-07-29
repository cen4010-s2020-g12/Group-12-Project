ls
chmod 777 Project
cd Project/
ls
chmod 777 .
chmod 0777 .
ls
cdmod 777 chattxt/
chmod 777 chattxt/
ls
mv PHPChat VerticalPrototype
ls
cd public_html/
ls
cd Project/
ls
mv js Project
cd ..
mv js Project
ls
cd Project/
ls
cd VerticalPrototype/
ls
cat readme.html
vi readme.html
ls
vi test.php
git
ls
cd ~
;s
ls
cat show
cd show 
rm show
ls
rm composer.phar 
ls
mkdir other_files
ls
cd public_html/
ls
git init
ls
rm -rf .git
ls
cd ..
git init
git add .
git commit
git commit -m "Entire Group user directory"
ls
git remote add origin https://github.com/cen4010-s2020-g12/lampserver
git push -u origin master
The requested URL returned error: 403 Forbidden while accessing https://github.com/git remote remove origindd
git remote remove origin
git remote rm origin
git remote add origin https://github.com/cen4010-s2020-g12/lampserver.git
git push -u origin master
The requested URL returned error: 403 Forbidden git remote set-url origin https://github.com/USERNAME/REPOSITORY.git
git remote set-url origin https://github.com/USERNAME/REPOSITORY.git
git push -u origin master
git push origin master
git remote set-url origin https://github.com/cen4010-s2020-g12/lampserver
git push origin master
git remote set-url origin https://github.com/cen4010-s2020-g12/lampserver.git
git push origin master
git remote set-url origin git@github.com:cen4010-s2020-g12/lampserver.git
git push origin master
The authenticity of host 'github.com (140.82.114.3)' can't be established.
RSA key fingerprint is 16:27:ac:a5:76:28:2d:36:63:1b:56:4d:eb:df:a6:48.
Are you sure you want to continue connecting (yes/no)? yes
Warning: Permanently added 'github.com,140.82.114.3' (RSA) to the list of known hosts.
Permission denied (publickey).
fatal: The remote end hung up unexpectedly
ls -al ~/.ssh
ls -al ~/.ssh
ssh-keygen -t rsa -b 4096 -C madisonverger613@gmail.com
eval $(ssh-agent -s
)
ssh-add ~/.ssh/id_rsa
ls
ssh-add ~/.ssh/githubkey
cd .ssh
ls
cat known_hosts 
ssh-add ~/.ssh/known_hosts 
Permissions 0644 for '/home/cen4010s2020_g12/.ssh/known_hosts' are too open.
It is required that your private key files are NOT accessible by others.
This private key will be ignored.
chmod 400 ~/.ssh/known_hosts 
ssh-add ~/.ssh/known_hosts 
cat .ssh
cd .ssh
cd .ssh/
ls
cat known_hosts 
ssh -T git@github.com
Failed to add the RSA host key for IP address '140.82.114.4' to the list of known hosts (/home/cen4010s2020_g12/.ssh/kn).
cd ~
ls
rm githubkey
rm githubkey.pub
git remote set-url origin git@github.com:cen4010-s2020-g12/lampserverasd.git
git push origin master
git remote set-url origin git@github.com:cen4010-s2020-g12/lampserver.git
git push origin master
ssh-keygen -t rsa -b 4096 -C madisonverger613@gmail.com
eval $(ssh-agent -s)
ssh-add ~/.ssh/id_rsa
cd .ssh
ls
cat id_rsa.pub
git push origin master
git pull --rebase origin master
git push origin masterrefusing to pull with rebase: your working tree is not up-to-date
git pull origin master
git push origin master
cd ~
ls
cd public_html/
ls
cd Project/
ls
cd ..
ls
cd ..
ls
cd public_html/
ls
vi indexC.html
ls
cd public_html/
ls
cat indexC.html 
vi indexC.html 
ls
cd public_html/
ls
cd Project/
ls
cd VerticalPrototype/
ls
vi test.php 
ls
cd public_html/
ls
cat indexC.html 
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
      function onYouTubeIframeAPIReady() {         player = new YT.Player('player', {
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


ls
ls -a
rm -R .git
ls
ls -a .
git pull https://github.com/cen4010-s2020-g12/Group-12-Project/tree/milestone-3
ls
cd public_html/
ls
cd Project/
ls
cat indexC.html
cd ..
cat indexC.html 
ls
cd about
ls
cd ..
ls
vi index.html 
ls
cd public_html/
ls
cat index
cat index.html 
ls
cd css
ls
cd ..
ls
cat index.html 
ls
vi index.html
rm index.html
ls
touch index.html
vi index.html
ls
vi index.html
ls
cd Project/
ls
vi roomload.php 
ls
cat roomstruct.php 
ls
cd public_html/
ls
cd Project/
ls
cd ..
ls
rm indexC.html 
cd Project/
ls
mv index.html index.php
ls
cat index.php
vi index.php
rm index.php 
touch index.php
vi index.php 
rm index.php 
vi index.php 
cat index.php 
rm index.php 
vi index.php 
vi roomload.php
vi queuestruct.php
ls
vi roomstruct.php
ls
vi roomstruct.php
$a = new A;
  $s = serialize($a);
  // store $s somewhere where page2.php can find it.
vi roomstruct.php
ls
cat index.php
ls
cat roomload.php
cat roomstruct.php
vi roomstruct.php
ls
cd public_html/
ls
cd Project/
ls
cat roomstruct.php
vi roomstruct.php
ls
vi roomload.php 
ls
cd public_html/
ls
cd Project/
ls
cat serializedroom 
ls
cat roomstruct.php
vi roomstruct.php 
ls
cat serializedroom 
vi roomstruct.php 
cp roomstruct.php roomstruct.php.orig
ls
vi roomstruct.php
cat roomstruct.php
<?php
    $queue = new SplQueue();
    $queue -> enqueue('A');
    $queue -> enqueue('B');
    $queue -> enqueue('C');
function serializequeue($vidqueue)
{     $serialized = serialize($vidqueue);
    file_put_contents('serializedqueue', $serialized);
}
function unserializequeue() {     $s = file_get_contents('serializedqueue');
    $unserialized = unserialize($s);
    echo(print_r($unserialized));
}
    unserializequeue();
?>
ls
cat roomstruct.php
ls
cat roomload.php 
cat index.php
vi roomload.php 
ls
can index.php
cat index.php
ls
cat roomstruct.php
vi roomstruct.php
ls
cat serializedroom
cat serializedqueue
ls
vi roomstruct.php
ls
cat index.php
cat roomload.php
vi roomload.php 
ls
vi roomstruct.php
vi roomload.php 
ls
vi roomload.php 
vi roomstruct.php
vi roomload.php 
vi roomstruct.php
ls
cd public_html/
ls
cd Project/
ls
cat roomload.php
vi roomload.php 
ls
chmod 777 chattxt/.
chmod 777 chattxt
CHMOD 0777 chattxt
chmod 0777 chattxt
cd VerticalPrototype/
ls
cd ..
ls
cd ..
chmod 0755 Project
cd Project/
ls
chmod 0777 chattxt
ls
cat index.php 
vi roomload.php 
ls
cd VerticalPrototype/
ls
ls -la
cd ..
ls -la
ls
chmod 0755 chattxt
chmod -R 0755 chattxt
cd VerticalPrototype/
ls
cat test.php 
ls
cd ..
ls
cp -R VerticalPrototype VerticalPrototype2
cd VerticalPrototype2
ls
chmod -R 0777 chattxt
cat test.php 
<div id="chatarea" data-style="auto"></div>
ls
cd ..
ls
vi roomload.php 
chmod -R 600 .
ls
chmod -R 777 .
ls
cd ..
ls
cd Project/
chmod -R 0755 .
cd Project/
ls
rm serializedqueue
ls
rm serializedroom 
ls
chmod 0777 chattxt
ls
cd VerticalPr
cd VerticalPrototype
ls
cp -R chattxt ../chattxt
cd ..
ls
cd chattxt
ls
cd VerticalPrototype
cd ..
ls
cd VerticalPrototype
cp chat* ../chat*
cd ..
ls
rm -R chatex
rm -R chattxt
rm -R chatfiles
ls
cd VerticalPrototype
ls
cp -R chatex ../..
cp -R chatfiles ../..
cp -R chattxt ../..
cd ../..
ls
cd Project
ls
cat roomload.php 
ls
cd VerticalPrototype
ls
cat test.php
<div id="chatarea" data-style="auto"></div>
ls
cd ..
ls
cd ..
ls
cp -R chatex Project
cp -R chatfiles Project
cp -R chattxt Project
ls
chmod 777 chattxt
cd Project/
chmod 777 chattxt
ls
cd ..
ls
chmod 0777 chattxt
cd Project/
chmod 0777 chattxt
cd ..
ls
chmod 777 chattxt
chmod -R chattxt/
chmod -R chattxt
chmod -R 777 chattxt
cd Project/
chmod -R 777 chattxt
cd ..
ls
rm -R chatex
rm -R chatfiles
rm -R chattxt
ls 
cd Project/
ls
rm -R VerticalPrototype2
vi roomload.php 
ls
cd chatfiles
ls
vi class.ChatSimple.php 
ls
cd ..
ls
cd chatfiles/
ls
vi setchat.php 
ls
cd ..
ls
cd ,,
ls
vi index.php 
ls
vi roomload.php 
ls
vi index.php
ls
vi roomload.php 
vi index.php
ls
vi roomload.php 
ls
cd public_html/
ls
cd Project/
ls
roomstruct.phpcat roomstruct.php
cat roomstruct.php
vi roomstruct.php
vi roomload.php 
vi roomstruct.php
vi roomload.php 
vi roomstruct.php
vi roomload.php 
vi roomstruct.php
vi roomload.php 
vi roomstruct.php
vi roomload.php 
vi roomstruct.php
vi roomload.php 
vi roomstruct.php
vi roomload.php 
vi roomstruct.php
vi roomload.php 
vi roomstruct.php
ls
cd public_html/
ls
cd Project/
ls
cat index.php 
ls
cat index.php
cat roomload.php 
vi roomload.php 
ls
vi roomstruct.php
vi roomload.php 
rm roomload.php 
vi roomload.php
touch serializedqueue
chmod 777 serializedqueue
vi roomload.php
ls
vi index.php
vi roomload.php
vi roomstruct.php
telnet 127.0.0.1 1234
build
cmake
ls
cd other_files/
vi my-program
websocketd --port=8080 my-program
./websocketd --port=8080 my-program
ls
mv my-program webocketd/
cd webocketd/
ls
./websocketd --port=8080 my-program
./websocketd
websocketd
cd /usr
cd local
cd bin
cp ~/other_files/webocketd/websocketd .
ls
 cd ~
ls
cd public_html/
ls
cd Project/
ls
vi roomstruct.php
curl
ls
cd ..
ls
cd ..
ls
cd other_files/
ls
rm -R webocketd/
cd ~/public_html/Project/
vi videoandtime.php
php videoandtime.php 
vi videoandtime.php
sql
mysql
ls
vi videoandtime.php
rm videoandtime.php 
vi encodevideoandtime.php
touch encodedvideo
chmod 777 encodevideo
chmod 777 encodedvideo
ls
cat encodedvideo 
vi encodevideoandtime.php
cat encodedvideo 
vi encodevideoandtime.php
curl https://www.googleapis.com/youtube/v3/videos?id=9bZkp7q19f0&part=contentDetails&key=AIzaSyBiI3RW4tTmXKWV1GyUU8IsLUyfzBHVuAE
vi encodevideoandtime.php
ls
cat encodedvideo 
vi encodevideoandtime.php
cat encodedvideo 
vi encodevideoandtime.php
ls
car encodedvideo 
cat encodedvideo 
cat encodevideoandtime
cat encodevideoandtime.php
<?php
function encodevideo($vidurl)
{     file_put_contents('encodedvideo', $vidurl);
    parse_str( parse_url( $vidurl, PHP_URL_QUERY ), $my_array_of_vars );
    $ytid =  $my_array_of_vars['v'];
    $encodedjson = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id=".$ytid."&part=contentDetails&key=AIzaSyBiI3RW4tTmXKWV1GyUU8IsLUyfzBHVuAE");
    $decodedjson = json_decode($encodedjson);
    $encodedtime = $decodedjson->items[0]->contentDetails->duration;
    $hourpos = strpos($encodedtime,'H')+1;
    $minutepos = strpos($encodedtime, 'M')+1;
    $secondpos = strpos($encodedtime, 'S')+1;
    $timeinseconds = 0;
    if($hourpos-1) {
        $timeinseconds+=((int)substr($encodedtime,2,$hourpos))*60*60;
        $timeinseconds+=((int)substr($encodedtime,$hourpos,$minutepos-$hourpos-1))*60;
        $timeinseconds+=((int)substr($encodedtime,$minutepos,$secondpos-$minutepos-1));
    }
    else if ($minutepos-1) {
        $timeinseconds+=((int)substr($encodedtime,2,$minutepos))*60;
        $timeinseconds+=((int)substr($encodedtime,$minutepos,$secondpos-$minutepos-1));
    }
    else {
        $timeinseconds+=((int)substr($encodedtime,2,$secondpos));
    }
    file_put_contents('encodedvideo', $vidurl . ',' . $timeinseconds);
}
encodevideo("https://www.youtube.com/watch?v=HhZaHf8RP6g");
?>
cat encodevideoandtime.php 
vi encodevideoandtime.php 
vi processqueue.php
ls
vi processqueue.php
ls
vi roomstruct.php
ls
cat serializedqueue 
vi roomstruct.php
vi processqueue.php
vi roomstruct.php
vi processqueue.php
php processqueue.php 
vi processqueue.php
php processqueue.php 
vi processqueue.php
php processqueue.php 
vi processqueue.php
php processqueue.php 
vi processqueue.php
php processqueue.php 
vi processqueue.php
php processqueue.php 
vi processqueue.php
php processqueue.php 
ls
vi processqueue.php
php processqueue.php 
vi processqueue.php
php processqueue.php 
vi processqueue.php
php processqueue.php 
ls
cat encode
cat encodevideo 
php processqueue.php 
vi processqueue.php
php processqueue.php 
vi processqueue.php
php processqueue.php 
ls
vi roomstruct.php 
php roomstruct.php 
php processqueue.php 
vi processqueue.php
php processqueue.php 
vi processqueue.php
php processqueue.php 
php roomstruct.php 
php processqueue.php 
vi processqueue.php
php processqueue.php 
rpm -qa
rpm -qa | grep socket
gcc
ls
cd other_files
vi sample.c 
gcc sample.c -o run
vi sample.c 
gcc sample.c -o run
vi sample.c 
gcc sample.c -o run
ls
./run
yum install
systemd
cd /etc
ls
systemctl --type=service
cd /etc/systemd
ls
cd ..
ls
cd ..
ls
cd ..
ls
cd ~
ls
cd other_files/
vi socket.php
php socket.php 
vi socket.php
ls
cd ..
cd public_html/
ls
cd Project/
ls
vi roomstruct.php
ls
vi roomstruct.php
ls
cat processqueue.php 
<?php
include 'roomstruct.php';
include 'getvideolength.php';
        $initialtime = time();
        $currenttime = 0;
        $currentvideo = getnextvideo();
        $lengthofvideo = gettime($currentvideo);
                $currenttime = time();
                //echo($currenttime);
                //echo(' ');
                //echo($initialtime);
                //echo(' ');
                //echo($lengthofvideo);
                while($currenttime-$initialtime<$lengthofvideo) {
                        echo( $currentvideo.','.($currenttime-$initialtime));
                        file_put_contents('encodedvideo', $currentvideo.','.($currenttime-$initialtime));
                        sleep(1);
                        $currenttime = time();
                        //echo($currenttime-$initialtime);
                }
                removefromqueue();
                        $currentvideo = getnextvideo();
                }
                $initialtime = time();
        }
?>ls
ls
cat encodevideo 
ls
cd public_html/
ls
cd Project/
ls
rm items\[0\]- 
ls
cat contentDetails- 
rm contentDetails- 
ls
cat duration 
rm duration
ls
rm roomstruct.php.orig 
ls
vi encodevideoandtime.php 
mv encodevideoandtime.php getvideolength.php
vi getvideolength.php 
ls
cat encodedvideo 
cat encodedvideo
cat encodedvideo 
ls
cd public_html/
ls
cd Project/
ls
cat encode
cat encodevideo 
vi processqueue.php 
php processqueue.php 
ls
cd public_html
ls
cd Project/
ls
php roomstruct.php
vi roomstruct.php
vi visualqueue.php
ls
cd public_html/
ls
cd Project/
ls
cat encodevideo 
ls
vi visualqueue.php
ls
vi roomstruct.php 
php roomstruct.php 
vi roomstruct.php 
php processqueue.php 
cd public_html/
cd Project/
php processqueue.php
ls
cd public_html/
ls
cd Project/
ls
ls
cd public_html/
cd Project/
ls
cat serializedqueue 
vi roomstruct.php 
php roomstruct.php 
cat serializedqueue 
vi roomstruct.php 
cat serializedqueue 
php roomstruct.php 
cat serializedqueue 
php processqueue.php 
php roomstruct.php 
vi roomstruct.php 
cd public_html/Project/
php structqueue.php
php roomstruct.php
php processqueue.php
cat serializequeue
cat serializedqueue
php roomstruct.php
cat serializedqueue
php processqueue.php
php roomstruct.php
php processqueue.php
ls
cd public_html/
cd Project/
cat processqueue.php 
cd public_html/
cd Project/
ls
cat encodevideo 
https://www.youtube.com/watch?v=cOgj_5lYijo,18[cen4010s2020_g12@lamp Project]$ cat encodevideo
https://www.youtube.com/watch?v=cOgj_5lYijo,3[cen4010s2020_g12@lamp Project]$ cat encodevideo
https://www.youtube.com/watch?v=cOgj_5lYijo,3[cen4010s2020_g12@lamp Project]$
cat serializedqueue 
cd /etc
ls
./cron.d
cd cron.d
ls
cd public_html/
ls
cd Project/
ls
vi roomstruct.php 
vi processqueue.php 
ls
cd public_html/
ls
cd Project/
ls
php processqueue.php 
$ps aux | grep memcached
ps aux | grep memcached
vi processqueue.php 
php processqueue.php 
vi processqueue.php 
php processqueue.php 
ps aux | grep memcached
vi /etc/php.ini
php -i | grep memcached
vi /etc/php.ini
ls
cd public_html/
cd Project/
ls
php processqueue.php 
cd public_html/
cd Project/
php processqueue.php 
cd public_html/
cd Project/
ls
mysql
ls
touch queuestatus
ls
chmod 777 queuestatus 
vi processqueue.php 
vi queuestatus 
vi processqueue.php 
mkdir storage
ls
mv queuestatus storage
ls
vi processqueue.php 
php processqueue.php 
vi processqueue.php 
php processqueue.php 
vi processqueue.php 
php processqueue.php 
vi processqueue.php 
php processqueue.php 
vi processqueue.php 
php processqueue.php 
vi processqueue.php 
php processqueue.php 
vi processqueue.php 
php processqueue.php 
vi processqueue.php 
vi queuestatus 
php processqueue.php 
vi queuestatus 
php processqueue.php 
vi processqueue.php 
php processqueue.php 
vi processqueue.php 
cd public_html/Project/
cat encodequeue
lp
ls
ps -ef
ps -ef | grep php processqueue.php
ps -ef | grep "php processqueue.php"
ps -af | grep -w rv
ps -af | grep -w "php processqueue.php"
ps -afo | grep -w "php processqueue.php"
ps -af -o | grep -w "php processqueue.php"
ps -ef -o | grep -w "php processqueue.php"
ps -o | grep -w "php processqueue.php"
ps -o
ps -o a
pgrep "php processqueue.php"
pgrep
pgrep php
pgrep php processqueue.php
ps -o cmd -u UserName
ps -u cen4010s2020_g12 | tr -s " " | cut -d " " -f 6-
pgrep php
ps
ps -ef
ps -o uid,pid,cmd -ef|grep python
ps -o uid,pid,cmd -ef|grep php
ps -o uid,pid,cmd -ef|grep "php process.php"
ps o uid=,pid=,cmd= -C python
ps o uid=,pid=,cmd= -C php
ps o cmd= -C php
ps o cmd= -C "php processqueue.php"
ps o cmd= -C "php processqueue.phps"
ps o cmd= -C "php processqueue.php"
ps o cmd= -C "asdadphp processqueue.php"
ps o cmd= -C php\ processqueue.php
ps o cmd= -C php\ processqueued.php
ps o cmd= -C processqueue.php
ps o cmd= -C php' 'processqueue.php
ps o cmd= -C php' 'processqueues.php
ps o cmd= -C php' 'processqueue.php
ps o cmd= -C 'php processqueue.php'
ps o cmd= -C 'php processqueue.phps'
ps o cmd= -C "php processqueue.php"
ps o cmd= -C "php processqueue.phpd"
ps o cmd= -C "php processqueue.php
>
ps o cmd= -C "php processqueue.php"
ps o cmd= -C php\ processqueue.php
ps o cmd= -C php\ processqueue.phpd
ps o cmd= -C php\ dprocessqueue.phpd
ps o cmd= -C phpd\ processqueue.php
ps o cmd= -C php\ processqueue.php
ps o uid=,pid=,cmd= python
ps o cmd= python
ps o cmd= -C python
ps o cmd= -C php
ps o cmd= -C php | grep processqueue.php
ps o cmd= -C php | grep processqueue.phpps o cmd= -C php | grep processqueue.php
ls
cd public_html/
cd Project/
ls
pwd
