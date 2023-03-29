#include <stdio.h>

void main() {
    float notas[10], total;
    int i;

    for(i = 0; i < 10; i++) {
        printf("Digite a nota do aluno %d: ", i+1);
        scanf("%f", &notas[i]);
        total += notas[i] / 10;
    }
    
    printf("A média das notas dos alunos é de %f", total);
}