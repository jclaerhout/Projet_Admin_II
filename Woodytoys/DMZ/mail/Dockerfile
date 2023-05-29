FROM ubuntu:latest
# installation des dépendances postfix & dovecot
RUN apt update && \
    DEBIAN_FRONTEND=noninteractive\
    apt install -y --no-install-recommends \
        postfix\
        dovecot-core \
        dovecot-imapd \
        dovecot-pop3d \
        openssl\
        ca-certificates\
        net-tools\
        opendkim\
        telnet\
        opendkim-tools

#DKIM
RUN apt-get update && apt-get install -y opendkim opendkim-tools
RUN mkdir /etc/opendkim

#COPY opendkim/dkim_key.private /etc/opendkim/   pas de clef privée
COPY opendkim/dkim_key.txt /etc/opendkim/

COPY postfix/main.cf/  /etc/postfix/main.cf
COPY dovecot/dovecot.conf /etc/dovecot/dovecot.conf
COPY start.sh .

COPY private_key.pem /etc/certificat/
COPY public_key.pem /etc/certificat/

RUN chmod 111 start.sh

RUN useradd -rm -p $(openssl passwd -1 contact) contact
RUN useradd -rm -p $(openssl passwd -1 b2b) b2b

EXPOSE 25/tcp
EXPOSE 993/tcp
EXPOSE 995/tcp
EXPOSE 465/tcp
EXPOSE 587/tcp
EXPOSE 2525/tcp

CMD ./start.sh ; sleep infinity