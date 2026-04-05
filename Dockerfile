# Start from the official WordPress image
FROM wordpress:latest

# Install Git, Unzip, and Less
# 'less' is required for WP-CLI to display output correctly
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    less \
    && rm -rf /var/lib/apt/lists/*

# Copy Composer binary from the official Composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# --- INSTALL WP-CLI ---
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

# Install base plugins via Composer into the template directory
WORKDIR /usr/src/wordpress
COPY composer.json ./
RUN composer install --no-scripts --no-autoloader

# Copy all local themes and plugins into the source directory
COPY wp-content/ ./wp-content/


# Make sure www-data owns the copied content
RUN chown -R www-data:www-data ./wp-content

# Set working directory
WORKDIR /var/www/html