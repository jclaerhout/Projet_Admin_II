FROM ubuntu:latest

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get install -y mailutils
RUN apt-get install -y net-tools
RUN apt-get install -y mutt
RUN apt-get install -y vim
RUN apt-get install -y iputils-ping
RUN apt-get install -y telnet
RUN apt-get install -y dnsutils
RUN apt-get install -y links
RUN apt-get install -y sudo
RUN apt-get install -y nano
RUN useradd -rm -p $(openssl passwd -1 contact) contact

COPY .muttrc /home/contact

USER contact

CMD ["bash"]