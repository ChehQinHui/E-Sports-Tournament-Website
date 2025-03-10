# E-Sports Tournament Website

## Project Overview
This is an E-Sports tournament management website that allows users to register for tournaments, track match results, and view leaderboards. The system supports user authentication, match scheduling, and a dynamic ranking system.

## Features
- **User Registration & Login:** Secure authentication using PHP & MySQL.
- **Tournament Management:** Users can create, join, and manage e-sports tournaments.
- **Leaderboard System:** Automatically updates player rankings based on match results.
- **Match Scheduling:** Users can view match schedules and report results.
- **Responsive Design:** Optimized for desktop and mobile devices.

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL (phpMyAdmin)
- **Additional Libraries:** Bootstrap (for styling), AJAX (for asynchronous requests)

## Installation & Setup
1. **Download the project files** and extract them.
2. **Import the database:**
   - Open **phpMyAdmin**.
   - Create a new database (e.g., `esports_db`).
   - Import the provided SQL file (`esports_db.sql`).
3. **Configure the database connection:**
   - Open `config.php` and update the database credentials:
     ```php
     $host = "localhost";
     $user = "root"; // Change if necessary
     $password = "";
     $database = "esports_db";
     ```
4. **Run the project:**
   - Move the project folder to the web server directory (e.g., `htdocs` in XAMPP).
   - Start Apache & MySQL in XAMPP.
   - Open the browser and go to: `http://localhost/esports`

## Usage Guide
- **New users can register an account.**
- **Logged-in users can join available tournaments.**
- **Admins can create and manage tournaments.**
- **Match results can be updated by organizers, affecting the leaderboard.**

## Known Issues & Future Improvements
- Add a **real-time chat system** for players.
- Implement **bracket visualization** for tournament progression.
- Improve **security measures** for user authentication.

## Author
Developed by Cheh Qin Hui  
GitHub/Portfolio: [Insert link here]

