FROM php:7-apache

RUN apt-get update
RUN apt-get install -q -y ssmtp
RUN echo "TLS_CA_File=/etc/ssl/certs/ca-certificates.crt" >> /etc/ssmtp/ssmtp.conf
RUN echo "root=your-gmail-address@gmail.com" >> /etc/ssmtp/ssmtp.conf
RUN echo "mailhub=smtp.gmail.com:587" >> /etc/ssmtp/ssmtp.conf
RUN echo "AuthUser=your-gmail-address@gmail.com" >> /etc/ssmtp/ssmtp.conf
RUN echo "AuthPass=your-gmail-app-password" >> /etc/ssmtp/ssmtp.conf
RUN echo "UseTLS=YES" >> /etc/ssmtp/ssmtp.conf
RUN echo "UseSTARTTLS=YES" >> /etc/ssmtp/ssmtp.conf
RUN echo "FromLineOverride=YES" >> /etc/ssmtp/ssmtp.conf
RUN echo "sendmail_path=ssmtp -t" >> /usr/local/etc/php/conf.d/php-ssmtp.ini

COPY src/ /var/www/html/