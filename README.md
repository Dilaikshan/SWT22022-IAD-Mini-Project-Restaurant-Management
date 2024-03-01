# Restaurant Management System

This project is a Restaurant Management System designed to handle various aspects of restaurant operations, including frontend design and backend functionality.

## Technologies Used

### Frontend:
- HTML
- SCSS (Sass)
- JavaScript

### Backend:
- Laravel

## Project Overview

The project consists of the following components:

1. **Home**
   - Provides an overview of the restaurant, including details about the restaurant, master chefs, menu items, best reviews, and available services.

2. **About**
   - Displays detailed information about the restaurant and its chefs.

3. **Contact**
   - Provides contact details for the restaurant and allows users to submit queries or feedback using a form.

4. **Booking**
   - Allows users to book tables at the restaurant.

5. **Feedback**
   - Displays the best user feedback received by the restaurant.

6. **Service**
   - Showcases the various services offered by the restaurant, such as 24/7 service, quality food, and expertise of master chefs.

7. **Menu**
   - Displays detailed information about the food items available at the restaurant, including their descriptions and prices.

## File Structure

The project contains 8 blade files:

1. `home.blade.php`
2. `about.blade.php`
3. `contact.blade.php`
4. `booking.blade.php`
5. `feedback.blade.php`
6. `service.blade.php`
7. `menu.blade.php`

## Getting Started

To run this project locally, follow these steps:

1. **Clone this repository to your local machine.** 
    - Use Git to clone the Laravel project repository to the new machine.
       Open a terminal or command prompt and run the following command:

          git clone https://github.com/Dilaikshan/SWT22022-IAD-Mini-Project-Restaurant-Management.git   
3. **Ensure you have PHP and Composer installed.**
    - You can download and install Composer from the official website: https://getcomposer.org/
5. **Navigate to the project directory and run `composer install` to install the dependencies.**
6. **Create Environment File**
   - Laravel requires an environment file (.env) to run. Create a copy of the .env.example file and name it .env:

         cp .env.example .env
8. **Configure your database settings in the `.env` file.**
9. **Generate Application Key.**
    - Run the following command to generate a unique application key for the Laravel application:
  
           php artisan key:generate
11. **Run `php artisan migrate` to migrate the database.**
12. **Start the Laravel development server by running `php artisan serve`.**
13. **Access the application in your web browser at `http://127.0.0.1:8000`.**

## Contributing

If you'd like to contribute to this project, feel free to fork the repository and submit a pull request. Contributions are welcome!


