FROM ubuntu/bind9
MAINTAINER Julien Claerhout <julienclaerhout@gmail.com>

RUN apt-get update && apt-get install -y bind9 && apt install dnsutils -y
RUN mkdir /var/log/named

COPY named.conf /etc/bind
COPY woodytoys.zone /etc/bind
COPY woodytoys.reverse.zone /etc/bind

EXPOSE 53/udp
EXPOSE 53/tcp

CMD ["named", " -g"]
