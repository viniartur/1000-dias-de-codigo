/*
Exercise 02
ft_swap
Turn-in directory : ex02/
Files to turn in : ft_swap.c
Allowed functions : None
• Create a function that swaps the value of two integers whose addresses are entered
as parameters.
• Here’s how it should be prototyped :
void ft_swap(int *a, int *b);
*/

void ft_swap(int *a, int *b){
    *a = *b;
}