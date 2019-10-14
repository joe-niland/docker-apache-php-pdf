#!/bin/sh
docker build -t apache-php-pdf .
docker run -it -p 8082:80 --name test-pdf --rm apache-php-pdf