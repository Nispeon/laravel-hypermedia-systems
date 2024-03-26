# Laravel Hypermedia Systems

This is a simple Laravel application that demonstrates the use of hypermedia systems in a RESTful API.
I am following along the example provided in the book "[Hypermedia Systems](https://hypermedia.systems/)" by CARSON GROSS, ADAM STEPINSKI and DENİZ AKŞİMŞEK.

The objective of this app is just for me to learn more about hypermedia systems while experimenting with Laravel (which I am very unfamiliar with).

Feel free to use this code as a reference, but keep in mind that it is not production-ready, nor will it be a good example of how to properly use Laravel.

## Requirements

- Docker
- PHP >= 8.2 (for the initial composer install)

## Installation

```bash
./vendor/bin/sail composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
```

## Usage

```bash
./vendor/bin/sail artisan serve
```

Despite the message, the proper url to access the application is `http://localhost` (port 80).
