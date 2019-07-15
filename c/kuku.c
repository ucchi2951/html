#include <stdio.h>

int main(void){
    int i, j;
    //*の段を計算
    for(j = 0;j < 9; j++){
        printf("%dの段", j + 1);
        //下の句（っていうのか？）を表示して、かけ算の式と答えを出力。同じ段は一列にする。
        for(i = 0;i < 9;i++){
            printf(" %d×%d=%2d", j+1,i+1,(j+1)*(i+1));
        }
        //一つの段の計算が終わったら改行
        printf("\n");
    }
    return 0;
}