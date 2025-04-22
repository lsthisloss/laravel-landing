## This project is a web application built on Laravel. With an emphasis on modularity, responsive design, and extensibility. 

## Features and tasks completed
- **Blade templates**: Used to create responsive and reusable pages.
- **Modularity**: Logic is divided into controllers, models, and views (MVC structure, btw its frontend :p ).
- **SCSS**: Used for reusable and maintainable styles.
- **Vite**: Integrated for modern frontend asset bundling and live reloading.
- **Responsive design**: Supports layouts for different devices.
- **Dynamic SVG generation**: Generates SVG icons with dynamic positions and styles.



## Blade Components and the project structure
<details>
<summary>Click to expand the components</summary>    
1. **`partials/svg-container.blade.php`**:
   - Dynamically generates SVG icons with random positions and sizes.
   - Used as a background or decorative element in various sections.

2. **`partials/header-gradient.blade.php`**:
   - Contains a gradient background and includes the `svg-container` component.
   - Supports dynamic content injection via `@yield('header-content')`.

3. **`components/card.blade.php`**:
   - Displays individual cards with an image, title, description, and social links.
   - Used in a cycle like a factory of cards.

4. **`pages/editorial-principles.blade.php`**:
   - A page template that includes the `svg-container` as a background.
   - Contains a structured layout.
</details>
<details>
<summary>Click to expand the main resources of the project</summary>    

```plaintext
├── resources/                  # Application resources
│   ├── views/                  # Blade templates
│   │   ├── layouts/            # Main layouts (app.blade.php)
│   │   ├── partials/           # Reusable partials (header, footer, svg-container)
│   │   ├── components/         # Blade components (cards, buttons)
│   │   └── pages/              # Page-specific templates (editorial-principles.blade.php)
│   ├── scss/                   # SCSS styles
│   │   ├── base/               # Base styles (variables, mixins)
│   │   ├── components/         # Component-specific styles (buttons, cards)
│   │   └── pages/              # Page-specific styles
│   ├── js/                     # JavaScript files
│   └── lang/                   # Localization files - not implemented
├── routes/                     # Application routes
│   ├── web.php                 # Web routes - only one route (editorial-principles)
│   └── api.php                 # API routes
└──  
```
</details>


## How to run   
```plaintext
# Clone the repository
git clone https://github.com/lsthisloss/laravel-landing.git
cd laravel-landing
npm install
cp .env.example .env
docker compose build php
docker compose up --build
php artisan migrate
Now you can open the app at a address http://localhost:80
```

If you got an error "Failed to open stream: Permission denied", you need to set chmod -R 775 in your docker container.
```plaintext
docker ps
docker exec -it <php-container-name> bash
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache
php artisan config:clear
php artisan cache:clear
php artisan view:clear
Now try open the app.
```



## Summary
Summary: Laravel provides a flexible development framework, making it easy to add new features and maintain existing code, integrate it with API or write a tests.

## Demo
### Mobile
<details>
<summary>Click to expand the mobile version</summary>    
    
![image](https://github.com/user-attachments/assets/aab510da-f9bf-4abc-884f-065c3d02a8ff)        
![image](https://github.com/user-attachments/assets/23740e69-67a4-440b-8b54-d5adff6e87d8)
</details>

### Desktop
<details>
<summary>Click to expand the desktop version</summary>    
    
![Screenshot 2025-04-22 034024](https://github.com/user-attachments/assets/3ccf7869-3669-4347-90ad-1207560863ec)        
![image](https://github.com/user-attachments/assets/435272c2-47b6-4f8f-be0d-94f1a6d4214d)
</details>


