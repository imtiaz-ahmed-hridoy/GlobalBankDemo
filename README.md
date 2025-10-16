# 🏦 GlobalBank

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-9.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.2-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

**A Laravel banking application with transaction processing and gaming features**

[🚀 Demo](#) • [📖 Documentation](#installation) • [🐛 Issues](#contributing)

</div>

---

## ✨ Features

### 🏛️ **Banking Operations**
- 💰 **Money Transfers** - Send funds between accounts
- 📊 **Transaction History** - Track all financial activities  
- 💸 **Cash-out System** - Withdraw funds functionality
- 🏦 **Bank Management** - Handle multiple bank integrations
- 💱 **Multi-Currency** - Support for different currencies

### 👥 **User Management**
- 🔐 **Role-Based Access** - Admin and User roles with permissions
- 👤 **User Profiles** - Complete profile management with image uploads
- 🔑 **Authentication** - Secure login and registration system
- 📱 **Account Numbers** - Automatic account number generation

### 🎮 **Gaming System**
- 🎲 **Play Games** - Interactive gaming interface
- 🏆 **Rewards** - Earn rewards through gaming activities
- 🔑 **Game Keys** - Secure game session management
- 📈 **Gaming Analytics** - Track gaming performance

## 🛠️ Tech Stack

<table>
<tr>
<td>

**Backend**
- Laravel 9.x
- PHP 8.2+
- MySQL 8.0
- Spatie Permissions

</td>
<td>

**Frontend**
- Vuexy Template
- Bootstrap 5.2
- jQuery 3.6
- Laravel Mix

</td>
<td>

**Tools**
- Docker Support
- Webpack
- Composer
- NPM

</td>
</tr>
</table>

## 🚀 Installation

### Prerequisites
```bash
✅ PHP >= 8.2
✅ Composer
✅ Node.js & NPM  
✅ MySQL
```

### Quick Start

```bash
# Clone repository
git clone <repository-url>
cd GlobalBank

# Install dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate

# Compile assets
npm run dev

# Start application
php artisan serve
```

### 🐳 Docker Setup
```bash
docker-compose up -d
```

## 📊 Database Models

### User Model
```php
// Custom banking user fields
protected $fillable = [
    'role', 'Yourname', 'account_number', 'phone_no', 
    'email', 'currency', 'banknme', 'balance', 'user_img'
];

// Relationships
public function transation() { return $this->hasMany(transation::class); }
public function game_key() { return $this->hasMany(game_key::class); }
```

### Transaction Model
```php
protected $fillable = ['user_id', 'receiver_account', 'amount', 'bank'];
```

### Game Key Model  
```php
protected $fillable = ['user_id', 'visually', 'gamamount', 'gamnum'];
```

## 🛣️ Key Routes

### 🏠 **User Routes**
```php
/user_admin          # User dashboard
/user_info           # Profile management
/banklist            # Banking operations
/send_transaction    # Money transfers
/play_Game           # Gaming interface
/cashout             # Cash withdrawal
```

### 🔧 **Admin Routes**
```php
/admin_dashboard     # Admin panel
/admin_user_list     # User management
/admin_user_edit/{id} # Edit users
/get_transaction     # Transaction reports
```

## 🎨 User Interface

Built with **Vuexy Admin Template** featuring:
- 📱 Responsive design
- 🎯 Clean dashboard interface
- 📊 Data tables for transactions
- 🖼️ Image upload functionality
- 🎨 Modern Bootstrap 5 styling

## 🔐 Security Features

- **Role-based permissions** using Spatie Laravel Permission
- **Secure authentication** with Laravel's built-in system
- **Input validation** for all forms
- **Protected admin routes** with middleware
- **Account number validation** system

## 🏗️ Project Structure

```
GlobalBank/
├── app/
│   ├── Http/Controllers/
│   │   ├── adminController.php    # Admin operations
│   │   ├── UserController.php     # User operations  
│   │   └── homeController.php     # Home page
│   ├── Models/
│   │   ├── User.php              # User model
│   │   ├── transation.php        # Transaction model
│   │   └── game_key.php          # Gaming model
│   └── Helpers/
│       └── Helpers.php           # Utility functions
├── database/migrations/          # Database schema
├── resources/views/             # Blade templates
└── routes/web.php              # Application routes
```

## ⚙️ Configuration

### Environment Variables
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=globalbank
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Development Commands
```bash
# Watch for changes
npm run watch

# Production build
npm run production

# Clear caches
php artisan cache:clear
php artisan config:clear
```

## 🧪 Development

### Running the Application
```bash
# Development server
php artisan serve

# Asset compilation
npm run dev
```

### Database Operations
```bash
# Run migrations
php artisan migrate

# Fresh migration with seeding
php artisan migrate:fresh --seed
```

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License.

---

<div align="center">
<sub>Built with Laravel & Vuexy Template</sub>
</div>
