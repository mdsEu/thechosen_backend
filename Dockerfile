FROM php:8.3-rc-apache-bookworm

# make sure apt is up to date
RUN apt update

RUN apt install -y curl

RUN apt install -y wget

ADD https://github.com/ufoscout/docker-compose-wait/releases/download/2.7.3/wait /wait
RUN chmod +x /wait

COPY ./server_files/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./server_files/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
COPY ./server_files/php/php.ini /usr/local/etc/php/
RUN sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf
#add the following line to beginning of the file LimitRequestFieldSize 1000000 to /etc/apache2/apache2.conf
RUN sed -i '1s/^/LimitRequestFieldSize 1000000\n/' /etc/apache2/apache2.conf
RUN sed -i '1s/^/LimitRequestLine 1000000\n/' /etc/apache2/apache2.conf


RUN a2enmod headers

RUN a2enmod rewrite

RUN DEBIAN_FRONTEND="noninteractive" apt install -y tzdata

RUN apt update

RUN apt install -y acl git vim default-mysql-client libcurl4-openssl-dev libzip-dev zlib1g-dev libpng-dev libicu-dev libsqlite3-dev libxml2 libonig-dev libgd-dev libmcrypt-dev
RUN apt install -y libcurl4-openssl-dev libzip-dev zlib1g-dev libicu-dev libsqlite3-dev libxml2 libxml2-dev libjpeg-dev libjpeg62-turbo-dev jpegoptim optipng pngquant gifsicle
RUN apt -y install cron

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo pdo_mysql curl mbstring exif pcntl bcmath gd iconv intl pdo_sqlite xml zip mysqli
RUN docker-php-ext-enable mysqli

COPY ./entrypoint.sh /var/www/html/entrypoint.sh

WORKDIR /var/www/html

RUN chmod +x /var/www/html/entrypoint.sh

# VOLUME /var/www/html
# VOLUME /var/www/html/wp-content/languages
# VOLUME /var/www/html/wp-content/plugins
# VOLUME /var/www/html/wp-content/uploads

EXPOSE 80

CMD /bin/sh -i /var/www/html/entrypoint.sh & /bin/sh -c "exec /usr/sbin/apache2ctl -D FOREGROUND;";
