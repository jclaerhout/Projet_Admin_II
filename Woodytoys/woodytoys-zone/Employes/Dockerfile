FROM ubuntu/bind9

RUN apt update

RUN apt install dnsutils -y
RUN apt install iputils-ping -y
RUN apt install net-tools -y
RUN apt install lynx -y
RUN apt install nano

COPY resolv.conf /etc

CMD ["named", "-g"]
