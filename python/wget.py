#!/usr/bin/python3

import subprocess
#pipe = subprocess.Popen("wget -O index.html http://cslab.jbnu.ac.kr/ ", shell=True, stdout=subprocess.PIPE, stderr=subprocess.PIPE)

file = open("index.html", "r")
read = file.read()
print(read)
