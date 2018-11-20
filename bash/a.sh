#!/bin/sh
echo "hello"

echo $1 $2 $3

if [ "woo" = "woo" ] 
then
	echo "tr"
else
	echo "aa"
fi
a='expr 3 + 4'
echo $a

hap () {
	echo expr $1 + $2
}
echo "실행"
hap 10 20
echo "오늘 날짜는 $(date) 입니다."
set $(date)
echo "오늘은 $1 요일 입니다."

exit 0

