FROM ubuntu/bind9

RUN apt-get update && apt-get install -y bind9 && apt install dnsutils -y && apt install nano
RUN mkdir /var/log/named

COPY named.conf /etc/bind
COPY woodytoys.zone /etc/bind
COPY woodytoys.reverse.zone /etc/bind

CMD ["named", " -g"]
