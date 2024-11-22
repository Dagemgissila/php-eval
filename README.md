# PHP Evaluation

## Task 1: Testing `getSecureRandom` Function

### Run Tests

1. Install PHPUnit (if not installed):

   ```bash
   composer require --dev phpunit/phpunit ^9
   ```

2. Run the tests:

   ```bash
   phpunit tests/UtilsTest.php

   ```

## Task 2: `getSecureRandom` API

1.Run the built-in PHP server

```bash
php -S localhost:8000

```

Send Requests to the API
Browser: Visit http://localhost:8000/index.php?min=1&max=100

Postman: Send a GET request to http://localhost:8000/index.php?min=1&max=100
