#!/bin/sh

com="ps -u | grep bash"
#eval $com
for i in 1 2 3 4 5 6 7 8 9 10
do
	eval $com | awk '{print $3}'
done
exit 0
