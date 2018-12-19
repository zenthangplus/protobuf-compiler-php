FROM ubuntu:18.04

RUN apt-get update
RUN DEBIAN_FRONTEND='noninteractive' apt-get install -yqq --force-yes git php7.2 php7.2-dev zlib1g-dev apt-utils libtool autoconf automake

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

RUN pecl install grpc
RUN pecl install protobuf

RUN git clone -b $(curl -L https://grpc.io/release) https://github.com/grpc/grpc /grpc
RUN cd /grpc && git submodule update --init
RUN cd /grpc && make grpc_php_plugin
RUN cd /grpc/third_party/protobuf && ./autogen.sh && ./configure && make
RUN cd /grpc/third_party/protobuf && make install

RUN echo "extension=grpc.so" >> /etc/php/7.2/cli/php.ini
RUN echo "extension=protobuf.so" >> /etc/php/7.2/cli/php.ini

WORKDIR /var/www

COPY ./build.sh /bin/build.sh
ENTRYPOINT ["sh", "/bin/build.sh"]
