FROM php:7.4-apache


# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl

# Get latest Composer
COPY ./ /var/www/html/
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY .env.example /var/www/html/.env


RUN a2enmod headers rewrite
# RUN a2enmod ssl
# RUN apt-get install openssl
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf


# ENV
RUN sed -i "s/DB_HOST=127.0.0.1/DB_HOST=192.168.56.162/g" /var/www/html/.env
RUN sed -i "s/DB_DATABASE=laravel/DB_DATABASE=lcrsys_db/g" /var/www/html/.env
RUN sed -i "s/DB_USERNAME=root/DB_USERNAME=myserver01/g" /var/www/html/.env
RUN sed -i "s/DB_PASSWORD=/DB_PASSWORD=p@55w0rD/g" /var/www/html/.env

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# PHP INI SAMPLE
RUN sed -i "s/upload_max_filesize = 2M/upload_max_filesize = 2G/g" /usr/local/etc/php/php.ini
RUN sed -i "s/post_max_size = 8M/post_max_size = 120M/g" /usr/local/etc/php/php.ini

RUN composer install --optimize-autoloader --no-dev
RUN php artisan storage:link
RUN php artisan key:generate
RUN php artisan route:cache
RUN php artisan route:clear
RUN php artisan view:cache
RUN php artisan view:clear
RUN php artisan config:cache
RUN php artisan config:clear
RUN php artisan migrate
# RUN php artisan migrate --path="database/migrations/prpcmblmts"
RUN php artisan db:seed
RUN chgrp -R www-data /var/www/html/storage/ /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage
RUN chmod -R 775 /var/www/html/storage/