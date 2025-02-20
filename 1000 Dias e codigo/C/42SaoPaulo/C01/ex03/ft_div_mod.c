/*
Exercise 03
ft_div_mod
Turn-in directory : ex03/
Files to turn in : ft_div_mod.c
Allowed functions : None
• Create a function ft_div_mod prototyped like this :
void ft_div_mod(int a, int b, int *div, int *mod);
• This function divides parameters a by b and stores the result in the int pointed by
div. It also stores the remainder of the division of a by b in the int pointed by mod.

*/


void ft_div_mod(int a, int b, int *div, int *mod)
{

    *div = a / b ;
    *mod = a % b;

}