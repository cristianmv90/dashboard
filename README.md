# Social Media Dashboard Setup Instructions

## Prerequisites
- PHP 7.4+
- Composer
- Node.js
- MySQL

## Installation
1. Clone the repository:
   git clone https://github.com/cristianmv90/dashboard.git
   cd dashboard

2. Install dependencies:
   composer install
   npm install
   npm run dev

3. Configure environment variables:
   - Copy `.env.example` to `.env` and update the database credentials.

4. Run migrations:
   php artisan migrate

5. Serve the application:
   php artisan serve

## Usage
- Visit `http://localhost:8000/table` to view the dashboard.

## Used Laravel elements

- Factories
- Seeders
- Models
- Controllers
- API Routes
- Web Routes
- Tests
- Blade Templates
- JavaScript and Axios for Fetching Data
- Charts
- CSS/SCSS