#include <stdio.h>
#include <conio.h>
void main()
{
	int n,i,a[50],b[50],count[50],j;
	clrscr();
	printf("Enter the no. of terms:\n");
	scanf("%d",&n);
    printf("Enter the terms:\n");
    for(i=0;i<n;i++){
    	scanf("%d",&a[i]);
    }
    for(i=0;a[i]>0;i++){
    	b[i]=a[i]%2;    
    	a[i]=a[i]/2;    
    }
     
    for(i=0;a[i]>0;i++){
      while (a[i] != 0)
    
    {
        if ((a[i] & 1) == 1)
            count[i]++;
        a[i] = a[i] >> 1;
    }
}

    {
   
    int *ptr;
    int temp;
    
    for (j = 1; j <= n; j++) {
        for (i = 0; i < n-1; i++) {
            temp = a[i];
            a[i] = a[i+1];
            a[i+1] = temp;
            print(a, n);
	}
    }
}