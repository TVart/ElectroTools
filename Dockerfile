FROM ubuntu
MAINTAINER TVart, vartan.torossian@gmail.com
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get installl apache2 php5 libapache2-mod-php5
EXPOSE 80
VOLUME ["/var/www"]
CMD ["-g", "daemon off;"]
CMD ["httpd", "-DFOREGROUND"]
#ENTRYPOINT
