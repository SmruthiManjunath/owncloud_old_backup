#include <stdio.h>
#include <stdlib.h> /* to use rand() */

#include "p3funcs.h"

/* IMPLEMENT p3funcs.h FUNCTIONS BELOW */

int sum(int *values, int n) { 
    
     int sum =0,i;
    for(i =0;i<n;i++)
	{
		sum+=*(values+i);
	}

    return sum; /* REPLACE */
}

int *maxPtr(int *values, int n) {

	int max=0,i;  
	for( i=0;i<n;i++)
	{
		if(*(values+i)>*(max+values))
		{
			max = i;
		}
	}
	return values+max;
}

int *minPtr(int *values, int n) {
   int min=0,i;  
	for(i=0;i<n;i++)
	{
		if(*(values+i)<*(min+values))
		{
			min = i;
		}
	}
	return values+min;
}

int valueDiff(int *left, int *right) {

    return *left-*right;
}

void printTable(int *values, int n, int perRow) {
    
    int i,j,k=0;
    for(i = 0;i<=n/perRow;i++)
    {
	 for(j = 0;j<perRow && k < n;j++)
	 {
		printf("%10d",*(values+k));
		k++;
	 }
	printf("\n");
    }
}

int *randomValues(int n, int low, int high) {
    int* vals = malloc(n*sizeof(int));
    int i;

    for(i = 0;i<n;i++)
    {
	*(vals+i) = low+rand()%(high-low+1);
    }
   return vals;
}
