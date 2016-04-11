# Pai Galinha Web Site

This is the repository for the Pai Galinha Web site.

Pai Galinha Architecture uses an old server side website for simplicity purposes. 
For future, the backend and frontend could be separated into diferent repositories. This is simple as refactory Vue frontend components
to fetch server data usong API requests (See Frontend section).

## Backend

 Pai Galinha backend is developed with [Laravel][1].

## Frontend

[NPM][2] is used to manage Pai Galinha frontend development dependencies.

For CSS managment, we use [MaterializeCSS][3].

Materialize is not compatible to Browserify, so we use [Broserify Shim][4] transformer to resolve JS dependencies.

All CSS code is written using [SASS][5].

All Javascript code is implemented using [ECMAScript6][6]. 

The Javascript libraries dependencies are managed using [Browserify][7].

[Gulp][8] Tasks (with [Laravel Elixir API][9]]) are used to help frontend development workflow. 

## Docker

This repository contains a Dockerfile to help manage infraestructure dependencies with [Docker][10].

[1]: https://laravel.com/
[2]: https://www.npmjs.com/
[3]: http://materializecss.com/
[4]: https://github.com/thlorenz/browserify-shim
[5]: http://sass-lang.com/
[6]: http://es6-features.org/
[7]: http://browserify.org/
[8]: http://gulpjs.com/
[9]: https://github.com/laravel/elixir
[10]: https://www.docker.com/