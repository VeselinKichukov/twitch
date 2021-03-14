<p align="center"><img src="https://media-exp1.licdn.com/dms/image/C560BAQHm82ECP8zsGw/company-logo_200_200/0/1593628073916?e=2159024400&v=beta&t=89u72cg5KzjSQ1qwB9xPZYhWvr7jFkD_9mUyFdNFnVw"></p>

# Twitch App

## Intro
Twitch app is a proof of concept for a game management platform.
The app uses Laravel for the back end and Vue JS on the front end.
A lot of the techniques as well as the architecture are taken from the books and courses by Spatie : https://spatie.be/
- https://laravel-beyond-crud.com/
- https://front-line-php.com/
I am making use of DTOs (Data Transfer Objects) in order to work with structured and strongly typed data and
have a single place 'source of truth' where the data could be mapped and changed.
The app uses Inertia JS: https://inertiajs.com/  which lets you quickly build single-page apps using classic 
server-side routing and controllers.


## Installation

1. Clone the repo and `cd` into it
2. `composer install`
3. `npm install`
4. `npm run dev`
5. Rename or copy `.env.example` file to `.env`
6. Set the `IGDB_CLIENT_ID` and `AUTHORIZATION` used for IGDB api in the `.env` file. There is example in
`.env.example` file.
7. `php artisan key:generate`
8. `php artisan migrate`
9. `php artisan serve`
10. Visit `localhost:8000`

## What I would have done differently if I have more time

There is plenty that could be improved.
The front end of the app is minimalistic and definitely can be improved. I would add feedback to the user when an
action takes place, more views, components, and better styling. I would show more information about a game and
build a separate page for single game where we can see description, platforms, ratings, and much more.
I would add more categories such as Coming soon, Most reviewed, etc.
I would create more advanced pagination, currently, only the first 20 results returned from the API
are paginated.

Currently, I use the default HTTP Client which is built around the Guzzle HTTP Client provided by Laravel in my controllers. A nice different approach that could be used
to improve performance is the use of Livewire: https://laravel-livewire.com/ . By using livewire we can move our request's logic into their own components, that way we will clean up our controllers, improve the speed of our api calls
by making use of the async calls which livewire uses under the hood.

Another thing that could be done is implementing caching techniques for the api calls.

Another great feature that I would have done is the multi-query: https://api-docs.igdb.com/#multi-query which is
a great technique to combine multiple requests into a single one and that is beneficial in numerous ways.

I would improve the testing process of the app. Currently, there is one example test that makes 'fake' request.
I would add tests for all functionality and will have tests that would test against the real api as well. They will
be grouped using the `@group api` dock block and will be excluded most of the times with `phpunit --exclude api`.
















