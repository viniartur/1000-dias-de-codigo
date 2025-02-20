/*
Exercise 04
ft_ultimate_div_mod
Turn-in directory : ex04/
Files to turn in : ft_ultimate_div_mod.c
Allowed functions : None
• Create a function ft_ultimate_div_mod with the following prototype :
void ft_ultimate_div_mod(int *a, int *b);
• This function divides parameters a by b. The result of this division is stored in the
int pointed by a. The remainder of the division is stored in the int pointed by b.

*/

void ft_ultimate_div_mod(int *a, int *b)
{
    int mod;
    int div;


    div = *a / *b;
    mod = *a % *b;

    *a = div;
    *b = mod;

}