Demo: retrieve PDF file via PHP script
=============================================

This is a simple demo to answer the question here: https://stackoverflow.com/questions/58361967/how-to-block-access-to-directory-if-user-is-not-logged-in/

Usage
---------

Call `build-run.sh`, or:

```shell
docker build -t apache-php-pdf .
docker run -it -p 8082:80 --name test-pdf --rm apache-php-pdf
```

Browse to http://localhost:8082?pdf or http://localhost:8082/example.pdf`.
The dummy.pdf will be downloaded.
