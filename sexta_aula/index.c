#include <stdio.h>
#include <stdlib.h>

void main() {
    int tamanho;
    int *array;

    printf("Digite o tamanho do array: ");
    scanf("%d", &tamanho);

    array = (int*) malloc(tamanho * sizeof(int));

    for (int i = 0; i < tamanho; i++) {
        printf("Digite um valor para seu array: ");
        scanf("%d", &array[i]);
    }

    for (int i = 0; i < tamanho; i++) {
        printf("%d ", array[i]);
    }

    free(array);
}
