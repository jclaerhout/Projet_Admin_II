FROM ubuntu:latest
# installation des dépendances postfix & dovecot
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y postfix dovecot-core dovecot-imapd dovecot-pop3d && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    touch /var/log/mail.log
    
# config fichiers postfix
COPY postfix/main.cf /etc/postfix/main.cf
COPY postfix/master.cf /etc/postfix/master.cf
COPY postfix/virtual /etc/postfix/virtual
COPY postfix/vmailbox /etc/postfix/vmailbox
COPY dovecot/dovecot.conf /etc/dovecot/dovecot.conf

#COPY postfix/mysql-virtual-mailbox-domains.cf /etc/postfix/mysql-virtual-mailbox-domains.cf 
#COPY postfix/mysql-virtual-mailbox-maps.cf /etc/postfix/mysql-virtual-mailbox-maps.cf 
#COPY postfix/mysql-virtual-alias-maps.cf /etc/mysql/mysql-virtual-alias-maps.cf
#COPy postfix/mysql-virtual-email2email.cf /etc/postfix/mysql-virtual-email2email.cf
# config fichiers dovecots
COPY dovecot/dovecot.conf /etc/dovecot/dovecot.conf
#COPY dovecot/dovecot-sql.conf.ext /etc/dovecot/dovecot-sql.conf
# ports utiisés (SMTP SSL IMAP POP3)

# postmap
COPY postfix/virtual /etc/postfix/virtual
COPY postfix/vmailbox /etc/postfix/vmailbox
RUN postmap /etc/postfix/virtual && postmap /etc/postfix/vmailbox

EXPOSE 25 143 465 587 993

CMD ["sh", "-c", "service postfix start && service dovecot start && tail -f /var/log/mail.log"]