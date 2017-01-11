#!/bin/bash

# Install WordPress

cd ../httpdocs
wp core download

# Create a wp-config.php file
wp core config --prompt -v

# Create the database, as specified in wp-config.php
wp db create -v

# Create the WordPress tables in the database.
wp core install --skip-email --prompt

# Create .htaccess
	
touch .htaccess

# Change owner
chown mark:mark .htaccess

# Make it writable to avoid 500 errors
chmod 777 .htaccess