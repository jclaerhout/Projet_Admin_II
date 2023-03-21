FROM ubuntu:latest
# installation des dépendances postfix & dovecot
RUN apt-get update
    
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y postfix dovecot-core dovecot-imapd dovecot-pop3d telnet net-tools
    
RUN apt-get clean

RUN adduser test

RUN touch /var/log/mail.log
    
COPY postfix/main.cf/  /etc/postfix/main.cf

COPY dovecot/dovecot.conf /etc/dovecot/dovecot.conf

EXPOSE 25 143 465 587 993

CMD ["postfix", "start"]

CMD ["service", "dovecot", "start"]

CMD ["sh", "-c", "tail -f /var/log/mail.log"]