#!/usr/bin/python3

import subprocess
import sys
#print(sys.argv[1])
#name=sys.argv[1]
#print(name)
pipe = subprocess.Popen("ls -aFl "+sys.argv[1], shell=True, stdout=subprocess.PIPE, stderr=subprocess.PIPE)
#(sout, serr) = pipe.communicate()
rea = pipe.stdout.readline()
co=dco=fco=0
num = []
dir = []
ch = []
while rea:
	rea = pipe.stdout.readline()
#	print(rea)
	con=0
	read = str(rea)
	
	if(read == "b''"): break
	
	result = read.split(" ")
	count = len(result)
	if(co>=2):
		if (result[0][2:3] == "d"): dco += 1
		elif (result[0][2:3] == "-"): fco += 1
	ch.append(result[0][2:])
	for i in range(0, count):
		if(result[i] != ""):
			con += 1
			if(con==5): 
				num.append(result[i])
			elif(con==9):
				dir.append(result[i][0:-3])
	co += 1

print ("directory: "+str(dco)+", "+"file: "+str(fco))	   
for j in range(2, co):
	print(dir[j]+" " + num[j]+" " + ch[j])
