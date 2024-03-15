# Requirements

- Docker
- PHP >= 8.2 (for the initial composer install)

# Installation

```bash
./vendor/bin/sail composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
```

# Usage

```bash
./vendor/bin/sail artisan serve
```

Despite the message, the proper url to access the application is `http://localhost` (port 80).
