📘 Student Management Project – Afriq Formation

📌 Description
This project is a web application developed with Laravel and Blade for managing students of a driving school.
It allows users to add, edit, delete, and view student information, as well as manage their training programs.

🚀 Main Features

Students CRUD: create, edit, delete, and display students.

Form validation with clear error messages (e.g., driver’s license number required).

Responsive user interface using Bootstrap.

Eloquent relationships: managing connections between students and training programs (belongsToMany).

Success messages after each operation (add or update).

🛠️ Technologies Used

Laravel 10+ (PHP backend framework)

Blade (Laravel templating engine)

Bootstrap 5 (responsive interface)

MySQL (database)

📥 Installation

Clone the project:

git clone https://github.com/ton-compte/afriq-formation-eleves.git
cd afriq-formation-eleves

Install dependencies:

composer install
npm install && npm run dev

Configure the environment:

DB_DATABASE=afriq_formation
DB_USERNAME=root
DB_PASSWORD=

Run migrations:

php artisan migrate

Start the local server:

php artisan serve
