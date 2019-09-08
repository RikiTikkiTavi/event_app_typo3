FROM php:7.2-apache-stretch
LABEL maintainer="Martin Helmich <typo3@martin-helmich.de>"

# Install TYPO3
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        wget \
        curl \
# Configure PHP
        libxml2-dev libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        zlib1g-dev \
# Install required 3rd party tools
        graphicsmagick && \
# Configure extensions
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ && \
    docker-php-ext-install -j$(nproc) mysqli soap gd zip opcache intl && \
    echo 'always_populate_raw_post_data = -1\nmax_execution_time = 240\nmax_input_vars = 1500\nupload_max_filesize = 32M\npost_max_size = 32M' > /usr/local/etc/php/conf.d/typo3.ini

COPY . /app

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer

RUN cd /app && composer install
RUN ls -l
RUN php vendor/bin/typo3cms install:setup \
    --non-interactive \
    --database-user-name=root \
    --database-user-password=toor \
    --database-host-name=127.0.0.1 \
    --database-port=3306 \
    --database-name=typo3_95 \
    --use-existing-database \
    --admin-user-name=admin \
    --admin-password=adminadmin \
    --site-setup-type=site

RUN php -S localhost:8000 -t public



