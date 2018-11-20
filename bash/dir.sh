#!/bin/sh

com="/root/python/popen.py "
#eval $com 
for i in /root /home /tmp /etc
	do
	eval $com $i
done
exit 0
