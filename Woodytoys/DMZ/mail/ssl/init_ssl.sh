#!/bin/bash

# génération du certificat SSL
openssl req -x509 -newkey rsa:4096 -keyout /etc/ssl/private/server.key -out /etc/ssl/certs/server.crt -days 3650 -nodes -subj "/CN=l2-3.ephec-ti.be"

# copie des certificats dans le volume
cp /etc/ssl/private/server.key /ssl_private/
cp /etc/ssl/certs/server.crt /ssl_certs/