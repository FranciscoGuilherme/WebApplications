FROM php:7.2.10-fpm

RUN apt-get update
RUN apt-get install -y --no-install-recommends vim curl debconf subversion git apt-transport-https apt-utils
RUN apt-get install -y build-essential locales acl mailutils wget zip unzip
RUN apt-get install -y gnupg gnupg1 gnupg2
RUN apt-get install -y zlib1g-dev
RUN apt-get install -y libxml2-dev
RUN apt-get install -y sudo

# -----------------------------
# Instalando bibliotecas do PHP
# -----------------------------

RUN docker-php-ext-install pdo pdo_mysql zip xml
COPY php.ini /usr/local/etc/php/php.ini
COPY php-fpm-pool.conf 	/usr/local/etc/php/pool.d/www.conf

# ---------------------
# Instalando o Composer
# ---------------------

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && mv composer.phar /usr/local/bin/composer

# ------------------------------------------
# Instalando o PHP Unit para rodar os testes
# ------------------------------------------

RUN wget --no-check-certificate https://phar.phpunit.de/phpunit-6.5.3.phar && mv phpunit*.phar phpunit.phar
RUN chmod +x phpunit.phar && mv phpunit.phar /usr/local/bin/phpunit

# ----------------------------
# Criando o usuario na máquina
# ----------------------------

RUN groupadd dev -g 999
RUN useradd dev -g dev -d /home/dev -m
RUN passwd -d dev

# -----------------------
# Configurações de locale
# -----------------------

RUN rm -rf /var/lib/apt/lists/*
RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen
RUN echo "pt_BR.UTF-8 UTF-8" >> /etc/locale.gen && locale-gen
RUN echo "dev ALL=(ALL) ALL" > /etc/sudoers

WORKDIR /www/symfony/app

EXPOSE 9000

CMD ["php-fpm"]
