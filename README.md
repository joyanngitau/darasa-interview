
---

# Laravel Application Setup Guide 

This guide provides step-by-step instructions to set up and run your database-less Laravel application locally.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP (recommended version: PHP 8.1+)
- Composer (PHP dependency manager)
- A text editor or IDE of your choice (e.g., VS Code, PhpStorm)

## Installation Steps

### 1. Install PHP

If PHP is not already installed on your system, follow these steps:

- **Windows**:
  - Download PHP from [php.net/downloads.php](https://www.php.net/downloads.php) and follow the installation instructions.

- **macOS**:
  - Install PHP using Homebrew:
    ```bash
    brew install php
    ```

- **Linux (Ubuntu/Debian)**:
  - Install PHP using apt:
    ```bash
    sudo apt update
    sudo apt install php
    ```

### 2. Install Composer

Composer is a dependency manager for PHP. Follow these steps to install Composer:

- **Windows** and **macOS**:
  - Download and run the Composer installer from [getcomposer.org/download](https://getcomposer.org/download/).

- **Linux**:
  - Run these commands to download and install Composer globally:
    ```bash
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
    sudo mv composer.phar /usr/local/bin/composer
    ```

### 3. Install Laravel Installer

Install the Laravel Installer globally using Composer:

```bash
composer global require laravel/installer
```

Ensure Composer's global bin directory is in your system's PATH for using the Laravel command line tool.

## Getting Started

### 1. Clone the Repository

Clone your Laravel project repository from GitHub:

```bash
git clone https://github.com/your-username/your-project.git
cd your-project
```

### 2. Install Dependencies

Use Composer to install PHP dependencies:

```bash
composer install
```

### 3. Environment Configuration

Duplicate the `.env.example` file and rename it to `.env`:

```bash
cp .env.example .env
```

Generate an application key:

```bash
php artisan key:generate
```

### 4. Serve Your Application

Start the Laravel development server:

```bash
php artisan serve
```

Your application should now be running locally at `http://localhost:8000`.

---
