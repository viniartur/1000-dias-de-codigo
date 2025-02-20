/*
Exercise 06
ft_strlen
Turn-in directory : ex06/
Files to turn in : ft_strlen.c
Allowed functions : None
• Create a function that counts and returns the number of characters in a string.
• Here’s how it should be prototyped :
int ft_strlen(char *str);

*/
#include <unistd.h>
int	ft_strlen(char *str)
{

    int i = 0;
    while (str[i])
    {
        i++;
        
    }
    
    return(i);
}


int main()
{
    char *str = "hello mundo";
    write (1, str, ft_strlen(str));

}
