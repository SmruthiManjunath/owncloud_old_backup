#include <stdio.h>
#include <float.h>

double factorial(int);
int main()
{
	double i =1;
	double fact=1;
	double e=1;
	int n = 1;
	for(n=1;n<=170;n++)
	{
		e+=(1/factorial(n));
	}

	printf("%.8f",e);	
	/*while(1)
	{
		fact=fact*i;
		if(fact<0){
			break;
		}
		if(fact>DBL_MAX)
			break;
		printf("%lf \n",fact);
		if(i<0)
			break;
		i++;
	}
	printf("%lf",fact);
	//cout<<i-1<<endl;
	printf("%g",(i-1)); */

}


double factorial(int n)
{
	double fact=1;
	int i=1;
	for(i=1;i<=n;i++)
		fact*=i;
	return fact;

}
