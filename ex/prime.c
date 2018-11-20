#include<stdio.h>

int checkprime(int p){
	int i;
	
	if(p == 1) return 1;

	for(i=2;i<p;i++){
		if(p%i == 0){
			return 1;
		}
	}
	printf("%d \n", p);
	

	return 0;
}
