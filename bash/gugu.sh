#!/bin/sh
mul=0
#for i in 2 3 4 5 6 7 8 9
#do
#	for j in 1 2 3 4 5 6 7 8 9
#	do
#		mul=`expr $i \* $j`
#		echo "$i * $j = $mul"
#	done
#done
i=2
while [ $i -lt 10 ]
do
	j=1
	while [ $j -lt 10 ]
	do
		mul=`expr $i \* $j`
		echo "$i * $j = $mul"
		j=`expr $j + 1`
		
	done
	i=`expr $i + 1`
done
