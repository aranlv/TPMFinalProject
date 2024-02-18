# Hackathon Website Project

## 🌟 About

A Laravel-based project developed as the final assignment of the Technology Project Member (TPM) program at BINUS Computer Club (BNCC). The project serves as a demonstration of the comprehensive training received by our team members in web development, covering UI/UX design, front-end, and back-end development.

This site features a comprehensive set of functionalities including a dynamic home page, registration and login capabilities, a detailed admin panel for managing participants, and much more.

### 🛠 Built With

- Laravel
- HTML
- CSS
- JavaScript

### 👥 Team Members

- **UI/UX Designers:** Heaven Yunata, Jecelyn Grizha
- **Front-End Developers:** Patricia Willis A, Darren Anthony
- **Back-End Developers:** Aretha Natalova Wahyudi, Theresia Clarista Christie

## ✨ Features

- **Home Page:** Navigation bar, logo, auto-scroll sections for prizes, mentors, about, and more.
- **Registration and Login:** Detailed registration form with specific requirements and login functionality leading to a dashboard.
- **Admin Panel:** Manage participants with ease using search and sort features.

## 🎨 Design

For a detailed look at our UI/UX design, visit our Figma project:
[Hackathon Website Design on Figma](https://www.figma.com/file/5yMUhRQdq2Pr1bFdoEjlZ4/Untitled?type=design&node-id=0%3A1&mode=design&t=88TV4uX7PhaSoODm-1)


## 🔧 Backend Mechanism 

The backend of this Hackathon website is powered by Laravel, utilizing the MVC architecture to manage the application's data, logic, and presentation. The system is connected to a database, facilitating working registration and login processes with user authorization. A default admin account is provided for accessing the admin panel, where CRUD operations are fully functional. The application's routes are meticulously designed to ensure a smooth navigation experience across the website.


## 🚀 Running the Project Locally

To get a local copy up and running follow these simple steps.

### Prerequisites

- PHP >= 7.3
- Composer
- npm or yarn

### Installation Steps

1. Clone the repo
   ```sh
   git clone https://github.com/aranlv/TPMFinalProject.git
2. Navigate to the project directory:
   ```sh
   cd TPMFinalProject
3. Install dependencies:
    ```sh
    composer install
4. Copy .env.example to .env and configure your environment variables:
     ```sh
    cp .env.example .env
5. Generate an application key:
     ```sh
    php artisan key:generate
6. Run migrations and seed the database (if applicable):
     ```sh
    php artisan migrate --seed
7. Start the local development server:
     ```sh
    php artisan serve
The site will be available at http://localhost:8000.

