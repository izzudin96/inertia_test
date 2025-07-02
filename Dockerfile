p# For production build
FROM dunglas/frankenphp:1.5-php8.4-bookworm

RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libgd-dev \
    zip \
    unzip \
    libzip-dev

# Clear Cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP Dependecies
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Be sure to replace "your-domain-name.example.com" by your domain name
ENV SERVER_NAME=:80
# If you want to disable HTTPS, use this value instead:
#ENV SERVER_NAME=:80

# Enable PHP production settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# If you use Symfony or Laravel, you need to copy the whole project instead:
# COPY . /app

# RUN composer install --prefer-dist --no-interaction --no-progress --no-dev