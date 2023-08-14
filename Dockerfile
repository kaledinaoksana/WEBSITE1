
FROM php:8.2-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./website/index.php" ]

# Expose port 80 to allow incoming HTTP traffic
EXPOSE 80