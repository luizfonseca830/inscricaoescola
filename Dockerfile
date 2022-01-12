FROM wyveo/nginx-php-fpm:php74
WORKDIR /usr/share/nginx/
RUN rm -rf /usr/share/nginx/html
COPY . /usr/share/nginx
RUN ls -s public html
