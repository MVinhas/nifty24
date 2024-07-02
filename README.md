# Nifty24

**Nifty24** is a PHP CMS (2024 Edition).

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Development](#development)
- [Testing](#testing)
- [Authors](#authors)
- [License](#license)

## Installation

### Prerequisites

- PHP ^8.1
- Composer
- Node.js and npm (for Tailwind CSS)

### Steps

1. Clone the repository:
```
git clone https://github.com/MVinhas/nifty24.git

cd nifty24
```

Install PHP dependencies:

`composer install`

Install Node.js dependencies (including Tailwind CSS):

`npm install`

## Usage
To use the CMS, follow the instructions specific to your project setup. Typically, you will need to configure your web server to serve the public directory and ensure that your environment variables are set correctly.

## Development
### Autoloading
The project uses PSR-4 autoloading. Make sure to place your PHP classes in the src/ directory and follow the namespace Nifty24\.

### Tailwind CSS
To build your CSS with Tailwind, run:

`npx tailwindcss build src/style.css -o public/css/style.css`
You can also set up a watch command for development:

`npx tailwindcss build src/style.css -o public/css/style.css --watch`

### File Structure

nifty24/
├── bin/                      # CLI files
├── config/                   # Server and Env Files
├── node_modules/             # Node.js dependencies (ignored in Git)
├── public/                   # Publicly accessible files
│   └── index.php             # Entry point of the application
├── src/                      # PHP source files
├── tests/                    # PHPUnit test files
├── vendor/                   # Composer dependencies (ignored in Git)
├── .gitignore
├── composer.json
├── package.json
├── phpunit.xml
├── README.md
├── tailwind.config.js

## Testing
To run the test suite using PHPUnit, use the following command:

`./vendor/bin/phpunit`

## Authors
Micael Vinhas - mvinhas.tirso@gmail.com

## License
None yet.