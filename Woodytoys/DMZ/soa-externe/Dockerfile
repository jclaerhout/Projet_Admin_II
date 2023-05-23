FROM ubuntu/bind9:latest

RUN apt-get update && apt-get install -y bind9 && apt install dnsutils -y && apt install nano
RUN mkdir /var/log/named

WORKDIR /etc/bind

COPY named.conf /etc/bind
COPY dnssec/* /etc/bind

#RUN chown root:bind etc/bind/Kl2-3.ephec-ti.be*
#RUN chown root:bind etc/bind/l2-3.ephec-ti.be.zone.signed

EXPOSE 53/udp
EXPOSE 53/tcp

CMD ["named", " -g"]
