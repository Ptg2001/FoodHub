# Use an official PHP image as the base image
FROM php:8.0-apache

# Install necessary PHP extensions, if any
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the PHP application into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 to allow web traffic
EXPOSE 80
