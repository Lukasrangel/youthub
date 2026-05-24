FROM php:8.2-fpm-alpine

RUN deluser www-data && \
    addgroup -g 33 -S www-data && \
    adduser -u 33 -D -S -G www-data www-data


RUN apk add --no-cache \
    ffmpeg \
    icu-dev \
    libzip-dev \
    zlib-dev \
    libstdc++

# 2. AJUSTE: Python3 e Curl instalados juntos com as dependências do yt-dlp
RUN apk add --no-cache python3 curl \
    && curl -L https://github.com/yt-dlp/yt-dlp/releases/latest/download/yt-dlp -o /usr/local/bin/yt-dlp \
    && chmod a+rx /usr/local/bin/yt-dlp

RUN docker-php-ext-install \
    intl \
    zip \
    opcache 

WORKDIR /www
RUN chown www-data:www-data /www
COPY --chown=www-data:www-data . /www/

RUN chown -R www-data:www-data /www

EXPOSE 9000
USER www-data
CMD ["php-fpm"]