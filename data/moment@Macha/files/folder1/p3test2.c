/* p3test2.c

   Do NOT change this file.
*/

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#include "p3funcs.h"

int main(int argc, char *argv[]) {
    int x[] = { 406, 198, 961, 238, 910, 188, 467, 639, 125, 581, 144,
        354, 812, 716, 150, 753, 387, 491, 788, 624, 263, 545, 908, 829,
        287, 913, 811, 245, 997, 701, 806, 76, 368, 792, 645, 868, 87,
        702, 403, 698, 772, 793, 678, 37, 328, 893, 80, 721, 213, 251,
        375, 18, 541, 117, 315, 136, 743, 519, 863, 359, 340, 283, 908,
        600, 620, 684, 479, 210, 685, 23, 466, 641, 985, 803, 139, 106,
        463, 575, 461, 572 };
    int nx = (sizeof x) / sizeof(int);
    int *p;

    unsigned seed;
    srand(time(NULL)); /* system time used for random seed by default */
    if (argc > 1 && sscanf(argv[1], "%u", &seed) > 0)
        srand(seed);   /* change the seed if one is input by the user */

    puts("first 25 values of x, 7 per line:");
    printTable(x, 25, 7);
    puts("last 20 values of x, 4 per line:");
    printTable(x + nx - 20, 20, 4);

    puts("25 random values in range -20 to +20:");
    p = randomValues(25, -20, 20);
    printTable(p, 25, 5);
    free(p); /* good practice to avoid memory leak */

    puts("10 random values in range -200 to +200:");
    p = randomValues(10, -200, 200);
    printTable(p, 10, 5);
    free(p);

    puts("40 random values in range 0 to 1000:");
    p = randomValues(40, 0, 1000);
    printTable(p, 40, 5);
    free(p);

    return 0;
}
