FROM php:7.2-apache-stretch
LABEL maintainer="Martin Helmich <typo3@martin-helmich.de>"

# Install TYPO3
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        wget \
        curl \
        locales \
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

# Install composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Set up typo3

WORKDIR /app

COPY ./composer.json ./composer.json
COPY ./deploy ./deploy

# Locales
RUN locale-gen en_US.UTF-8 && dpkg-reconfigure locales

# Install dependencies and wait for db is available
RUN chmod +x ./deploy/pre_install.sh && ./deploy/pre_install.sh

# Copy config
COPY ./public/typo3conf/LocalConfiguration.php ./public/typo3conf/LocalConfiguration.php

# Copy site configs
COPY ./config ./config

# Copy extensions/packages
COPY ./public/typo3conf/ext/event_inventory ./public/typo3conf/ext/event_inventory
COPY ./public/fileadmin/event_app_package ./public/fileadmin/event_app_package

# Fix permissions
RUN chmod +x ./deploy/entry.sh && chmod +x ./deploy/wait_db.sh

ENTRYPOINT ["./deploy/entry.sh"]





