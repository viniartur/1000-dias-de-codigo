/*
Exercise 05
ft_putstr
Turn-in directory : ex05/
Files to turn in : ft_putstr.c
Allowed functions : write
• Create a function that displays a string of characters on the standard output.
• Here’s how it should be prototyped :
void ft_putstr(char *str);

void ft_putstr(char *str)
{
    while (*str) {
        write(1, str, 1);
        str++;
    }
}

*/
#include <unistd.h>

void ft_putstr(char *str)
{
int i;

i = -1;
while(str[++i])
write(1, &str[i], 1);
}

int main()
{
    ft_putstr("hoje e amanha");
    return 0;
}

