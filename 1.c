#include <stdio.h>

int main(void)
{
  int n;

  printf("n = ");
  scanf("%d", &n);

  //演算子の優先順位を正しくするために(n & 1)と変更する。
  if( (n & 1) == 0 ){
    printf("%d は偶数です\n", n);
  }
  return 0;
}
