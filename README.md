# SIT_Demo

OVERVIEW:
          This repository contains the files for a WordPress website project that implements three main roles:

Contributors: Users who can contribute content but cannot publish.
Editors: Users who can review and publish content.
Administrators: Users who can oversee all workflows and settings.


Table of Contents:
             1): Requirements
             2): Installation
             3): Requesting Changes




->REQUIREMENTS:
            1): WordPress: The latest stable version of WordPress. This is typically managed by your hosting 
                provider or local environment (e.g., XAMPP, MAMP, Local by Flywheel).
            2): Web Hosting / Localhost: A hosting environment or local server setup that supports WordPress. 
                This includes PHP (version 7.4 or higher) and MySQL (version 5.6 or higher), or MariaDB.
                      ->Hosting: Managed hosting environments that support WordPress.
                      ->Localhost: For local development, set up a local server environment using tools like 
                         XAMPP, MAMP, or Local by Flywheel.



->INSTALLATION STEPS:
            1: Clone the repository: First, clone this repository to your local development environment or web 
               server.
               command line:   git clone https://github.com/Tufailyarlok/SIT_Demo.git
            
            
            2: Install WordPress: If you haven't already set up WordPress, follow these steps:
                      ->Download the latest version of WordPress from WordPress.org.
                      ->Extract the files and place them in your web server's document root.


            3: Upload the files: Replace the default wp-content, wp-includes, and wp-admin directories with 
               the ones from this repository. Ensure that you maintain the correct directory structure.

            4: Create a Database:

                          ->Create a new MySQL database using your preferred method (e.g., phpMyAdmin, MySQL 
                            command line).
                          ->Import the provided database.sql file (if available) or run the WordPress 
                            installation wizard to set up the database.
            5: Configure wp-config.php:

                      ->Edit the wp-config.php file with your database details:
                        php code to copy:
                        define( 'DB_NAME', 'your_database_name' );
                        define( 'DB_USER', 'your_database_user' );
                        define( 'DB_PASSWORD', 'your_database_password' );
                        define( 'DB_HOST', 'localhost' );
            6: Complete WordPress Installation: Navigate to the website in your browser (e.g., 
              http://localhost/your-site/) and complete the WordPress installation wizard by setting up your 
              admin credentials.





REQUESTING CHANGES:

If you need any changes or additional features in the website that are not already included, please follow these steps:

              1): Fork this repository: Create your own copy of the repository on GitHub.
                  Make changes: Implement the changes you require in your forked repository.
              2): Create an Issue: If you're unable to make the changes yourself or need clarification, open 
                  an issue in the "Issues" tab of this repository, describing what needs to be changed.
              3): Submit a Pull Request: Once you're happy with the changes, submit a pull request for review.


I’ll review the pull requests and try to merge any relevant changes, or provide feedback if further work is needed. If you’re unable to submit changes directly, you can also contact me via email or the contact form on the website for assistance.





