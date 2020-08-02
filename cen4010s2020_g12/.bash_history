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
ls
cd public_html/
cd Project/
ls
vi processqueue.php 
php processqueue.php 
vi processqueue.php 
php processqueue.php 
vi storage/queuestatus 
vi processqueue.php 
crontab -e
php processqueue.php 
vi processqueue.php 
php processqueue.php 
crontab -e
php processqueue.php 
ls
cd ..
ls
cd ..
ls
cd other_files/
ls
vi periodic.sh
ls
./periodic.sh
chmod 755 periodic.sh 
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
./periodic.sh
vi periodic.sh
too many arguments
ps -ef
kill 32202
ps -ef
ps -ef | grep process
ls
cd public_html/
cd {
cd Project/
ls
php processqueue.php 
pwd
cd ~
ls
cd other_files/
ls
rm serializedqueue 
rm encodevideo 
./periodic.sh 
ls
rm encodevideo 
rm serializedqueue 
ls
vi periodic.sh 
./periodic.sh 
ls
pwd
cd ~
ls
cd public_html/
ls
cd Project/
ls
cat encode
cat encodevideo 
ls
ps -ef | grep processqueue.php 
cat Encodevideo 
ls
rm encodevideo 
ls
rm encodedvideo 
ls
cat ls
rm ls
ls
cat app.js
ls
vi processqueue.php 
ps -ef | grep php
kill 962
ps -ef | grep php
cat encodevideo 
ls
vi roomstruct.php 
cat encodevideo 
vi roomstruct.php 
cat encodevideo 
ls
cd public_html/
ls
cd Project/
ls
vi processqueue.php 
ls
crontab -e
ps -ef | grep php
kill 861
ps -ef | grep php
mysql
ls
cat encodevideo 
rm Encodevideo 
vi processqueue.php 
cd other_files/
ls
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
ps o cmd= -C php | grep processqueue.php
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
ps o cmd= -C php | grep processqueue.php
vi periodic.sh 
./periodic.sh 
ps -ef
ps -ef | grep php
vi periodic.sh 
ps -ef | grep php
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
./periodic.sh 
vi periodic.sh 
crontab -e
ls
cd ~/public_html/
cd Project/
ls
vi roomstruct.php 
php roomstruct.php 
vi roomstruct.php 
ls
cat encodevideo 
vi processqueue.php 
ps -ef
ps -ef | grep php
kill 1476
ls
ps -ef | grep php
php roomstruct.php 
vi roomstruct.php 
php roomstruct.php 
vi roomstruct.php 
ls
cat encodevideo 
vi roomstruct.php 
php roomstruct.php 
vi roomstruct.php 
ps -ef | grep php
cat encodevideo 
vi roomstruct.php 
vi fillqueue.php
vi roomstruct.php 
vi fillqueue.php
ps -ef | grep php
cat serializedqueue 
ls
php fillqueue.php 
vi fillqueue.php 
php fillqueue.php 
vi fillqueue.php 
php fillqueue.php 
cat encodevideo 
php fillqueue.php 
ps -ef | grep php
kill 3588
ps -ef | grep php
cd public_html/Project/
ls
cat encodevideo
cat serializedqueue
cat encodevideo
ls
cd public_html/
cd Project/
ls
php fillqueue.php 
ps -ef
ps -ef | grep php
kill 4441
ps -ef | grep php
cat encodevideo 
php fillqueue.php 
ps -ef | grep php
kill 12013
ls
cd public_html/
cd Project/
ls
vi processqueue.php 
cd public_html/
cd Project/
ls
cat encodevideo 
cat serializedqueue 
php fillqueue.php 
cat serializedqueue 
cat encodevideo 
ls
vi roomstruct.php 
cd public_html/
cd Project/
ls
vi roomstruct.php 
cat serializedqueue 
cat encodevideo 
php fillqueue.php 
cat encodevideo 
vi fillqueue.php 
php fillqueue.php 
ps -ef | grep php
kill 13214
ls
php processqueue.php 
ls
cat app.js
ls
cat pract.php
ls
vi roomload.php 
cd public_html/Project/
php fillqueue.php
cat encodevideo
cat serializedqueue
vi fillqueue.php
php fillqueue.php
cat serializedqueue
cat encodevideo
cat serializedqueue
encodevideo
cat encodevideo
php visualqueue.php
php fillqueue.php
cat serializedqueue
vi fillqueue.php
php fillqueue.php
cat serializedqueue.php
cat serializedqueue
cat encodevideo
php visualqueue.php
vi visualqueue.php
php visualqueue.php
php fillqueue.php
php visualqueue.php
vi roomload.php
php visualqueue.php
php fillqueue.php
cat encodevideo
php fillqueue.php
cat encodevideo
php fillqueue.php
fillqueue.php
cat serializedqueue
php fillqueue.php
cat serializedqueue.php
cat serializedqueue
cat encodevideo
cd public_html/
cd Project/
ls
vi getsession.php
ls
ls chatfiles
cd public_html/Project/
vi roomstruct.php
cat serializedqueue
cat encodevideo
cd public_html/
cd Project/
ls
cat roomstruct.php 
vi roomstruct.php 
ls
vi processqueue.php 
php processqueue.php 
vi roomstruct.php 
vi clearqueue.php
vi roomstruct.php 
cat serializedqueue 
php clearqueue.php 
cat serializedqueue 
vi clearqueue.php 
vi roomstruct.php 
php clearqueue.php 
cat serializedqueue 
vi roomstruct.php 
vi clearqueue.php 
php clearqueue.php 
cat serializedqueue 
vi roomstruct.php 
php roomstruct.php 
cat serializedqueue 
cat encodevideo 
ps -ef | grep php
kill 14863
ps -ef | grep php
cat encodevideo 
ls
cat fillqueue.php 
php fillqueue.php 
cat encodevideo 
cat serializedqueue 
php fillqueue.php 
cat serializedqueue 
ps -ef | grep php
kill 19293
php processqueue.php 
cat serializedqueue 
cd public_html/Project/
vi roomstruct.php
cat encodevideo
cat serializedqueue
vi clearqueue.php
vi roomstruct.php
cat encodevideo
vi processqueue.php
vi roomstruct.php
vi processqueue.php
cat encodevideo
vi index.php
php clearqueue.php
php fillqueue.php
cat serializedqueue.php
cat serializedqueue
php clearqueue.php
cat serializedqueue
cd public_html/
cd Project/
ls
cat serializedqueue 
php fillqueue.php 
cat serializedqueue 
cat encodevideo 
ps -ef | grep php
kill 19319
php processqueue.php 
vi processqueue.php 
cat serializedqueue 
vi roomstruct.php 
php fillqueue.php 
ps -ef | grep php
cat serializedqueue 
ps -ef | grep php
vi processqueue.php 
ps -ef | grep php
kill 14584
kill 19774
php processqueue.php 
cd public_html/Project/
cat serializedqueue 
cd public_html/
cd Project/
ls
vi roomstruct.php 
cd public_html/Project/
cat encodevideo
cat serializedqueue
php fillqueue.php
cat serializedqueue
php clearqueue.php
cat serializedqueue
cd public_html/Project/
ls
cd sea
cd searchtest/
vi app.js
ls
vi index.html
vi app.js
cd public_html/Project/
ls
vi app.js
ls
pwd
vi app.js
cat app.js
ls
cd searchtest/
ls
cat index.html 
vi index.html 
ls
vi app.js 
ls
vi index.html 
vi app.js 
cp app.js app.js.orig
ls
cd ..
ls
cd searchtest/
ls
cd ..
ls
cd public_html/P
cd public_html/Project/
cat serializedqueue
php clearqueue.php
cat serializedqueue
cd public_html/Project/
l
ls
cd searchtest/
ls
vi index.html 
ls
vi item.html 
ls
vi app.js
vi item.html 
vi app.js
vi item.html 
vi app.js
