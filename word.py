#!/usr/bin/python3

file = open("words.txt", "r")
#res = file.readlines()
low = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
up = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
number = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
#for i in range(0, 25):
#	low.append(0)

for line in file.readlines():
#print(line[0])
#	num = ord(line[0])
	num = ord(line[-2]) #reverse
	if((num >= ord('a')) and (num <= ord('z'))):
			low[num - ord('a')] += 1
	elif((num >= ord('A')) and (num <= ord('Z'))):
			up[num - ord('A')] += 1
	elif((num >= ord('0')) and (num <= ord('9'))):
			number[num - ord('0')] += 1




for i in range(0, 26):
	print(chr(97+i)+" - " + str(low[i]), end='\n')
	print(chr(65+i)+" - " + str(up[i]), end='\n')
for i in range(0,10):
	print(chr(48+i)+" - " + str(number[i]), end='\n')
