FROM php:8.4-fpm

# -----------------------------
# ---- SYSTEM DEPENDENCIES ----
# -----------------------------
RUN apt-get update \
    && apt-get install -y \
    libpq-dev \
    libicu-dev \
    libonig-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*


# -----------------------------
# ------- PHP EXTENSIONS ------
# -----------------------------
RUN docker-php-ext-install \
    pdo_pgsql \
    mbstring \
    intl \
    opcache \
    zip


# -----------------------------
# ----- COMPOSER INSTALL ------
# -----------------------------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer


# -----------------------------
# ------- START SCRIPT --------
# -----------------------------
COPY .docker/php/start.sh /start.sh
RUN chmod +x /start.sh


# -----------------------------
# ----- WORKING DIRECTORY -----
# -----------------------------
WORKDIR /app


# -----------------------------
# ----- APPLICATION FILES -----
# -----------------------------
COPY . .


# -----------------------------
# ---------- PHP-FPM ----------
# -----------------------------
EXPOSE 9000
ENTRYPOINT [ "/start.sh" ]
CMD ["php-fpm"]
