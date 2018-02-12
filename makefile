CC=mpicc
CFLAGS=-c -g -Wall -std=c11
LDFLAGS=
OBJECTS=$(SOURCES:.cpp=.o)

SOURCES=main.c

EXECUTABLE=x.mpiTest

all: $(SOURCES) $(EXECUTABLE)

$(EXECUTABLE): $(OBJECTS)
	$(CC) $(LDFLAGS) $(OBJECTS) -o $@

.cpp.o:
	$(CC) $(CFLAGS) $< -o $@

clean:
	rm *.o x.*
