#!/bin/bash

# curl sample

# cd /tmp ; curl -# -O http://ftp.jaist.ac.jp/pub/Linux/ubuntu-jp-cdimage/releases/16.04/ubuntu-ja-16.04-desktop-amd64.iso 2>&1 | while IFS= read -r -n1 char; do
#      [[ $char =~ [0-9] ]] && keep=1 ;
#      [[ $char == % ]] && echo "$progress" >> /tmp/result && progress="" && keep=0 ;
#      [[ $keep == 1 ]] && progress="$progress$char" ;
# done

start=`date +%s`
url=$1
filename=`echo "${url##*/}"`
echo $url
echo $filename
cd /tmp ; curl -# -O $url -k 2>&1 | while IFS= read -r -n1 char; do
     [[ $char =~ [0-9] ]] && keep=1 ;
     [[ $char == % ]] && echo $1 > /tmp/isodl-$start && echo "$progress" >> /tmp/isodl-$start && progress="" && keep=0 ;
     [[ $keep == 1 ]] && progress="$progress$char" ;
done

rm /tmp/isodl-$start

mv /tmp/$filename /var/lib/libvirt/images/
