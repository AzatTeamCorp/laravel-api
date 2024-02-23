## How to setup the application?
1. Clone project from Git `git clone {path-to-repository}`
2. Install composer `composer install`
3. Generate the application key `php artisan key:generate`
4. Rename `.env.example` to `.env` 
5. Change datatbase credentials
6. Change queue connection in `.env` (QUEUE_CONNECTION) from `sync` to `database`
7. Run the migration `php artisan migrate`

## How to test API?
Just send `POST` query to `{url}/api/submit` with body 
```
[
    'name'     => 'John Doe',
    'email'    => 'john@example.com',
    'message'  => 'Yuor message'
]
```

Example:

POST http://127.0.0.1/laravel-api/api/submit -data {name: "Test", email: "test@example.com", message: "Lorem"}


Response:

200 (success): {success: true}

422 (validation error): {errors: [{field: errorMessage}]}