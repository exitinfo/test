#!/usr/bin/python3

a = [88, 98, 96, 77, 63]
b = [86, 77, 66, 86, 93]
c = [74, 83, 95, 86, 97]
sum = [0, 0, 0]
for i in range(0, 5):
	sum[0] += a[i]
	sum[1] += b[i]
	sum[2] += c[i]

print(sum[0], sum[1], sum[2])
print(sum[0]/5, sum[1]/5, sum[2]/5)
