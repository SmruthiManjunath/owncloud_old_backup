#! /bin/sh
set -e
if [ "$#" -ne 3 ] || ! [ -f "$2" ] ; then
    echo "Usage: $0 PORT WELCOMEFILE OUTPUTFILE" >&2
    exit 1
fi
if ! [ -f "server_java_tcp.class" ] ; then
    javac server_java_tcp.java
fi

#Start the server with the port ($1), pipe in the welcome ($2)
#Send output to $3
java server_java_tcp $1 < $2 > $3 &

echo $!
#Save its PID so we can kill it after we run the server.

