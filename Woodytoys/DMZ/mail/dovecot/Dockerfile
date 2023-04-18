FROM dovecot/dovecot

EXPOSE 110
EXPOSE 143
EXPOSE 25

RUN apt-get update
RUN apt-get install net-tools
COPY dovecot.conf /etc/dovecot/

CMD ["/usr/sbin/dovecot", "-F"]