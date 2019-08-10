#include <stdio.h>

int main(void){
    unsigned short us = 50000;
    char c = (char)us;
    short s = us;
    int i = us;
    double d = us;

    printf("  char型:%d\n", c);
    printf(" short型:%d\n", s);
    printf("   int型:%d\n", i);
    printf("double型:%f\n", d);

    return 0;
}
