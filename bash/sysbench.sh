#!/bin/sh

#i=4
#com="sysbench --threads=$i cpu run"
#eval $com | grep second | awk '{print $4}'

for i in 1 2 3 4 8 16
do	
	com="sysbench --threads=$i cpu run"	
	eval $com | grep second | awk '{print $4}'
done

exit 0
