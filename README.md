# NurCertify - Online Educational Platform for Nurses

NurCertify is an online education and training platform that provides professional support for nurses seeking to enhance their qualifications. The platform focuses on prepping nurses for various nursing-related examinations through structured online assistance.


## Features

__User Registration and Verification:__ Clients can sign up, verify their email, and gain access to the platform.

__Third-Party Integration:__ A third-party communication widget allows users to easily contact the platform for assistance.

__Admin Panel:__ Administrators can manage user accounts, roles, and settings through dedicated admin pages.

__Responsive Design:__ The application is designed with responsive and modern UI components for an intuitive user experience.

__Role-Based Access Control:__ Admin access is restricted and managed through role-based authentication.


## Technologies Used

- __Backend:__ Laravel, Laravel Breeze
- __Frontend:__ TailwindCSS, FontAwesome, LineAwesome
- __Database:__ SQLite
- Other: Third-party communication widget integration


## Installation

__Clone the repository:__
- `git clone https://github.com/your-username/nurcertify.git`
- `cd nurcertify`

__Install dependencies:__
- `composer install`
- `npm install`

__Set up environment variables:__
Create a .env file from the .env.example file and configure your environment settings, especially the database connection.

- `cp .env.example .env`
- `php artisan key:generate`

__Run migrations:__
Migrate the database to create the necessary tables.
`php artisan migrate`

__Start the development server:__
- `php artisan serve`

__Build the front-end assets:__
- Use Laravel Mix to compile the TailwindCSS assets.
- `npm run dev`


## Usage
### User Workflow
Users can sign up, verify their email, and access the platform to explore available services.
Through a third-party widget, users can contact the platform administrators for inquiries and assistance.
Admin users can manage the app, including creating, updating, or deleting user accounts, changing user roles, and other administrative settings.

### Admin Features
- __User Management:__ Admins can create, modify, and delete user accounts.
- __Role Management:__ Admins can assign roles and manage access permissions.
- __Account Settings:__ Admins can modify various account settings and ensure platform functionality.


## Key Contributions
- Laravel Breeze was used for scaffolding the authentication and user verification system.
- TailwindCSS was integrated to provide responsive and modern UI components.
- SQLite was used as the lightweight database during development.
- Third-party widget integration allows seamless communication between users and platform administrators.
- Admin Pages were built to manage users, roles, and platform settings efficiently.


## Credits
FontAwesome and LineAwesome for the icons used throughout the application.


## License
This project is licensed under the MIT License.

