# Clothing Store Demo

This demo Laravel application showcases a simple product catalog with authentication.

## Getting Started

1. Install dependencies:
   ```bash
   composer install
   npm install
   npm run build
   ```
2. Create a copy of `.env` and set up your database credentials.
3. Run migrations:
   ```bash
   php artisan migrate
   ```
4. Start the development server:
   ```bash
   php artisan serve
   ```

Visit `/catalog` to see the product catalog. After logging in you can manage products from the dashboard.
