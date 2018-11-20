CFLAGS = -Wall -g

bin=getprime
t1=main
t2=prime
obj=$(t1).o $(t2).o

all: $(bin)
	
$(bin): $(obj)
	$(CC) -o $@ $(obj)

clean:
	rm -f $(bin) *.o
