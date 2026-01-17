# Use the official PHP image with Apache
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql zip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the Apache document root to the public directory
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Update the default Apache configuration files to use the new document root
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy the application code to the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Ensure the SQLite database directory is writable
RUN touch /var/www/html/storage/database.sqlite && \
    chown -R www-data:www-data /var/www/html/storage

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install project dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set the proper permissions for storage and cache directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
