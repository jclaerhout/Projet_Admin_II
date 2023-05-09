FROM ubuntu:latest

RUN apt update

RUN apt install dnsutils -y
RUN apt install iputils-ping -y
RUN apt install nano -y
RUN apt install net-tools -y
RUN apt install lynx -y
RUN apt update
RUN apt install mutt -y

COPY resolv.conf /etc

CMD tail -f /dev/null
