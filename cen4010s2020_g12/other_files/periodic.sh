#!/bin/bash
# A sample Bash script, by Ryan
export var=$(ps o cmd= -C php | grep processqueue.php);
if [ -z "$var" ]
then
  cd /home/cen4010s2020_g12/public_html/Project/
  php processqueue.php
else
  echo process queue is running
fi

