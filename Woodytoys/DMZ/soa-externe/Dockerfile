FROM ubuntu/bind9:latest

RUN apt-get update && apt-get install -y bind9 && apt install dnsutils -y && apt install nano
RUN mkdir /var/log/named

COPY named.conf /etc/bind
COPY l2-3.ephec-ti.be.zone /etc/bind
COPY 249.140.34.in-addr.arpa.zone /etc/bind

EXPOSE 53/udp
EXPOSE 53/tcp

CMD ["named", " -g"]
