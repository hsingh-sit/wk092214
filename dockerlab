# Multi-stage build for PHP + Apache (same as your working auth lab)
FROM php:8.1-apache

# Enable Apache rewrite module (common for web apps)
RUN a2enmod rewrite

# Copy ALL your PHP files to Apache document root
COPY . /var/www/html/

# Ensure correct permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80 for Render
EXPOSE 80

# Apache stays in foreground (Render requirement)
CMD ["apache2-foreground"]
