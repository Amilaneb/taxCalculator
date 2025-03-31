# Tax Calculator

Welcome to the Tax Calculator project, a Laravel application for calculating income tax based on tax brackets. This project is designed to demonstrate object-oriented design principles, design patterns, testing, scalability, and software engineering principles in the context of an enterprise-scale application.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Running](#running)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites

Before you begin, ensure you have the following tools installed on your machine:

- [PHP](https://www.php.net/downloads) (version 8.0 or higher)
- [Composer](https://getcomposer.org/download/)
- [Node.js and npm](https://nodejs.org/) (for frontend dependencies like Tailwind CSS)
- [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

## Installation

1. **Clone the Repository**

   Clone the repository from your desired branch:

   ```bash
   git clone https://github.com/Amilaneb/taxCalculator.git
   cd tax-calculator
   ```

2. **Install PHP Dependencies**

   Use Composer to install PHP dependencies:

   ```bash
   composer install
   ```

3. **Install Frontend Dependencies**

   If you're using Tailwind CSS or other frontend dependencies, install them with npm:

   ```bash
   npm install
   ```

4. **Generate Application Key**

   Generate an application key for Laravel:

   ```bash
   php artisan key:generate
   ```

## Configuration

1. **Configure the Database**

   Duplicate the `.env.example` file to `.env` and configure the database settings:

   ```bash
   cp .env.example .env
   ```

   Edit the database parameters in the `.env` file:

   ```
   DB_CONNECTION=sqlite
   DB_DATABASE=/absolute/path/to/database/database.sqlite
   ```

2. **Run Migrations**

   Run migrations to create the necessary tables in the database:

   ```bash
   php artisan migrate
   ```

## Running

To start the Laravel development server, use the following command:

```bash
  php artisan serve
```

Then, open your browser and navigate to `http://localhost:8000` to see the application in action.

## Testing

To run unit tests, use the following command:

```bash
php artisan test
```
