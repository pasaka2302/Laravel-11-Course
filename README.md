# 🚀 Laravel 12 Learning Project

This is a personal learning project built using **Laravel 12**, inspired by a course on **Laracasts** that originally used Laravel 11. I decided to implement it using Laravel 12 to gain experience with the latest features.

---

## 📚 What I Learned

During the development of this project, I explored and practiced various Laravel features, including:

- 🧭 Routing (Web)
- 🧰 Controllers & Resource Controllers
- 🧼 Form Request Validation
- 🔐 Authentication & Authorization
- 🔑 Policies & Gates for user permissions
- 🗃️ Eloquent ORM (model relationships like `hasMany`, `belongsTo`, etc.)
- 🧱 Middleware usage
- ⚠️ Error handling and custom responses
- 🎨 A bit of Tailwind CSS for styling

---

## 🛠️ Tech Stack

- **Laravel 12.x**
- **PHP 8.2+**
- **SQLite** (lightweight local database)
- **Tailwind CSS** (basic usage)

---

## ⚙️ Getting Started

Follow these steps to set up the project locally:

### 1. Clone the Repository

git clone https://github.com/pasaka2302/pasaka.git
cd project-name

### 2. Install Dependencies
-composer install
npm install && npm run dev

### 3. Environment Setup
cp .env.example .env
php artisan key:generate

### 4. Configure SQLite
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/your/database/database.sqlite

OR

touch database/database.sqlite

### 5. Run Migrations
php artisan migrate

### 6. Start the Development Server
php artisan serve
Then visit http://localhost:8000

🚧 Future Plans
- Enhance frontend using Tailwind CSS + Alpine.js or Livewire

- Add more feature tests

  🙏 Final Thoughts
This project has helped me understand Laravel more deeply, especially how to manage user permissions using Policies and Gates. I also had a chance to get started with Tailwind CSS, which I plan to use more in future projects.

