FROM brunogasparin/laravel-apache:5-onbuild

# Install mysql libraries and php extension
RUN apt-get update && apt-get install -y \
        libmysql++-dev \
    && docker-php-ext-install pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Image manipulation Dependencies (only for PNG and JPEG)
RUN apt-get update && apt-get install -y \
        libpng-dev \
        libjpeg-dev \
    && docker-php-ext-install fileinfo \
    && docker-php-ext-configure gd --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*
 
# Configure php
COPY resources/docker/images/php/conf.d/timezone.ini $PHP_INI_DIR/conf.d/  

## Install node to manage frontend dependencies
RUN set -ex \
  && for key in \
    9554F04D7259F04124DE6B476D5A82AC7E37093B \
    94AE36675C464D64BAFA68DD7434390BDBE9B9C5 \
    0034A06D9D9B0064CE8ADF6BF1747F4AD2306D93 \
    FD3A5288F042B6850C66B31F09FE44734EB7990E \
    71DCFD284A79C3B38668286BC97EC7A07EDE3FC1 \
    DD8F2338BAE7501E3DD5AC78C273792F7D83545D \
    B9AE9905FFD7803F25714661B63B535A4C206CA9 \
    C4F0DFFF4E8C1A8236409D08E73BC641CC11F4C8 \
  ; do \
    gpg --keyserver ha.pool.sks-keyservers.net --recv-keys "$key"; \
  done

ENV NPM_CONFIG_LOGLEVEL info
ENV NODE_VERSION 5.8.0

RUN apt-get update && apt-get install -y \
        xz-utils \
        && apt-get clean \
        && rm -rf /var/lib/apt/lists/*

RUN curl -SLO "https://nodejs.org/dist/v$NODE_VERSION/node-v$NODE_VERSION-linux-x64.tar.xz" \
  && curl -SLO "https://nodejs.org/dist/v$NODE_VERSION/SHASUMS256.txt.asc" \
  && gpg --batch --decrypt --output SHASUMS256.txt SHASUMS256.txt.asc \
  && grep "node-v$NODE_VERSION-linux-x64.tar.xz\$" SHASUMS256.txt | sha256sum -c - \
  && mkdir /usr/local/node \
  && tar -xJf "node-v$NODE_VERSION-linux-x64.tar.xz" -C /usr/local/node --strip-components=1 \
  && ln -s /usr/local/node/bin/npm /usr/local/bin/npm && ln -s /usr/local/node/bin/node /usr/local/bin/node \
  && rm "node-v$NODE_VERSION-linux-x64.tar.xz" SHASUMS256.txt.asc SHASUMS256.txt

## Install frontend dependencies
RUN npm install

## Compile frontend assets (Run all tasks and minify all CSS and JavaScript)
RUN node_modules/.bin/gulp --production

## we need node no more
RUN rm /usr/local/bin/node \
	&& rm /usr/local/bin/npm \
	&& rm -R /usr/local/node
	
RUN apt-get remove -y \
        xz-utils \
        && apt-get clean \
        && rm -rf /var/lib/apt/lists/*
