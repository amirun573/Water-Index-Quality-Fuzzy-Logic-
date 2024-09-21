# Use an official PHP runtime as a parent image
FROM php:7.0-cli

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Expose port 8000 to the outside world
EXPOSE 8000

# Command to run PHP's built-in web server
CMD ["php", "-S", "0.0.0.0:8000", "-t", "/var/www/html"]
