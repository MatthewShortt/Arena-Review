#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

int my_rank, p;

int main(int argc, char* argv[]){
	//init MPI stuff
	MPI_Init(&argc,&argv);
	//int my_rank, p;

	MPI_Comm_rank(MPI_COMM_WORLD, &my_rank);
	MPI_Comm_size(MPI_COMM_WORLD, &p);

	//have all nodes say hello
	printf("Hello world from proc %i of %i\n", my_rank, p);

	//code for the root node
	if(my_rank == 0){
		printf("Master Proc!!!\n");
	}
	//all other nodes will help
	else{
		printf("Slave node???\n");
	}

	//get ready to exit the program
	MPI_Finalize();
	return 0;
}
