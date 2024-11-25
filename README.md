# MORELE MOVIE RECOMMENDATION APP

This app has been developed for recruitment process

# APP DETAILS:
    - symfony 7.1
    - php 8.3

### Code Sniffer

```shell
#to run phpcs
php vendor/bin/phpcs --standard=phpcs.xml src/

#to run phpcbf
php vendor/bin/phpcbf --standard=phpcs.xml src/
```
### Task description:

Write simple PHP movies recommendation app (backend api). Movies list is provided in file, you can copy it or add directly to your application. 

App has 3 recommendation algorithms:
- 3 random movies
- movies that begin with letter W, but only if title contains even amount of characters
- movies that have more than one word in title

Write unit tests to prove that functionality works correctly.

Create a pull request with solution:
https://github.com/ViciousCabaret/movie-recommendation-app/pull/1
