# ONEDOC Marketing Website

A professional marketing and medical services website built with Laravel.

## Features

- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Multi-Service**: Marketing and Medical service offerings
- **Portfolio Management**: Showcase completed projects
- **Booking System**: Consultation booking form
- **Admin Dashboard**: Manage portfolio, bookings, and contact messages
- **Contact Management**: Integrated contact forms
- **SEO Ready**: Built with SEO best practices

## Technology Stack

- **Backend**: Laravel 10
- **Frontend**: Blade Templates, Tailwind CSS
- **Database**: MySQL/PostgreSQL
- **Authentication**: Laravel built-in authentication
- **Admin Panel**: Custom built admin dashboard

## Installation

### Prerequisites
- PHP 8.1+
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

### Setup Steps

1. Clone the repository
```bash
git clone https://github.com/cyrusgombya/onedoc-marketing.git
cd onedoc-marketing
```

2. Install dependencies
```bash
composer install
npm install
```

3. Environment setup
```bash
cp .env.example .env
php artisan key:generate
```

4. Database setup
```bash
php artisan migrate
php artisan db:seed
```

5. Build assets
```bash
npm run build
```

6. Start the development server
```bash
php artisan serve
```

Visit `http://localhost:8000` to view the website.

## Project Structure

```
onedoc-marketing/
├── app/
│   ├── Models/
│   ├── Http/Controllers/
│   └── Providers/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   ├── pages/
│   │   ├── admin/
│   │   └── components/
│   ├── css/
│   └── js/
├── routes/
├── public/
└── config/
```

## Pages

- **Home** - Landing page with hero section
- **Services** - Marketing and Medical services
- **Marketing Services** - Detailed marketing offerings
- **Medical Services** - Detailed medical offerings
- **About Us** - Company information
- **Portfolio** - Showcase of completed projects
- **Contact** - Contact form and information
- **Book Consultation** - Booking form
- **Admin Dashboard** - Content management

## Admin Access

Admin panel available at `/admin`

Default credentials (change in production):
- Email: admin@onedoc.com
- Password: password

## Contributing

Please refer to CONTRIBUTING.md for guidelines.

## License

This project is licensed under the MIT License.

## Support

For support, email support@onedoc.com
