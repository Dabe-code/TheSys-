# TheSys

Thesis Management System

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

TheSys is a Thesis Management System built with Laravel. This application helps manage thesis projects, student submissions, and academic workflows.

## Requirements

-   PHP >= 8.2
-   Composer
-   SQLite (included) or MySQL/PostgreSQL
-   Node.js & npm (for frontend assets)

## Installation & Setup

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Dabe-code/TheSys-.git
    cd Laravel-TheSys
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Install Node.js dependencies:**

    ```bash
    npm install
    ```

4. **Copy environment file:**

    ```bash
    cp .env.example .env
    ```

5. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

6. **Run database migrations:**

    ```bash
    php artisan migrate
    ```

7. **Seed the database (optional):**
    ```bash
    php artisan db:seed
    ```

## Running the Application

### Development Server

Start the Laravel development server:

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

### Compile Assets

For development (with hot reloading):

```bash
npm run dev
```

For production:

```bash
npm run build
```

### Running Tests

Execute the test suite:

```bash
php artisan test
```

Or using PHPUnit directly:

```bash
./vendor/bin/phpunit
```

## Project Structure

```
Laravel-TheSys/
├── app/                    # Application core
│   ├── Http/              # HTTP layer (Controllers, Middleware, Requests)
│   │   └── Controllers/   # Application controllers
│   ├── Models/            # Eloquent models
│   └── Providers/         # Service providers
├── bootstrap/             # Application bootstrap files
├── config/                # Configuration files
├── database/              # Database files
│   ├── factories/         # Model factories
│   ├── migrations/        # Database migrations
│   ├── seeders/          # Database seeders
│   └── database.sqlite   # SQLite database file
├── public/                # Public web files
├── resources/             # Views, CSS, JS, and other assets
│   ├── css/              # Stylesheets
│   ├── js/               # JavaScript files
│   └── views/            # Blade templates
├── routes/                # Route definitions
├── storage/               # Application storage
│   ├── app/              # Application files
│   ├── framework/        # Framework files
│   └── logs/             # Application logs
├── tests/                 # Test files
│   ├── Feature/          # Feature tests
│   └── Unit/             # Unit tests
├── vendor/                # Composer dependencies
├── .env                   # Environment configuration
├── artisan               # Artisan command-line tool
├── composer.json         # Composer dependencies
├── package.json          # Node.js dependencies
└── README.md             # This file
```

## Common Artisan Commands

```bash
# Clear application cache
php artisan cache:clear

# Clear configuration cache
php artisan config:clear

# Create a new controller
php artisan make:controller ControllerName

# Create a new model
php artisan make:model ModelName

# Create a new migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Create a new seeder
php artisan make:seeder SeederName

# Run database seeders
php artisan db:seed
```

## Contributing

We welcome contributions to TheSys! Follow these steps to contribute to the project:

### Setting Up for Development

1. **Fork the repository**

    - Go to [https://github.com/Dabe-code/TheSys-](https://github.com/Dabe-code/TheSys-)
    - Click the "Fork" button in the top right corner

2. **Clone your fork**

    ```bash
    git clone https://github.com/YOUR_USERNAME/TheSys-.git
    cd Laravel-TheSys
    ```

3. **Add the original repository as upstream**

    ```bash
    git remote add upstream https://github.com/Dabe-code/TheSys-.git
    ```

4. **Set up the development environment**
   Follow the installation steps in this README

### Git Workflow

1. **Keep your fork updated**

    ```bash
    git fetch upstream
    git checkout main
    git merge upstream/main
    ```

2. **Create a new branch for your feature/fix**

    ```bash
    git checkout -b feature/your-feature-name
    # or
    git checkout -b fix/issue-description
    ```

3. **Make your changes**

    - Write clean, well-documented code
    - Follow Laravel coding standards
    - Add tests for new functionality

4. **Commit your changes**

    ```bash
    git add .
    git commit -m "Add descriptive commit message"
    ```

5. **Push to your fork**

    ```bash
    git push origin feature/your-feature-name
    ```

6. **Create a Pull Request**
    - Go to your fork on GitHub
    - Click "New Pull Request"
    - Select your feature branch
    - Add a clear title and description

### Contribution Guidelines

-   **Code Style**: Follow PSR-12 coding standards
-   **Testing**: Ensure all tests pass (`php artisan test`)
-   **Documentation**: Update documentation for new features
-   **Commit Messages**: Use clear, descriptive commit messages
-   **Branch Naming**:
    -   Features: `feature/feature-name`
    -   Bug fixes: `fix/issue-description`
    -   Documentation: `docs/update-description`

### Before Submitting

1. **Run tests**

    ```bash
    php artisan test
    ```

2. **Check code style (if Pint is installed)**

    ```bash
    ./vendor/bin/pint
    ```

3. **Clear caches**
    ```bash
    php artisan cache:clear
    php artisan config:clear
    ```