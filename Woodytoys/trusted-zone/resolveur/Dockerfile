FROM ubuntu/bind9

RUN apt-get update && apt-get install bind9 && apt install dnsutils -y
RUN apt-get install -y iputils-ping
RUN mkdir /var/log/named

COPY named.conf /etc/bind

CMD ["named", " -g"]
