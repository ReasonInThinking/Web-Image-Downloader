# Simple & Secure PHP Image Uploader

This is a lightweight web application for uploading images, built with PHP, JavaScript, and CSS. The project focuses on a clean user interface and basic server-side security.

<img width="867" height="860" alt="file-load" src="https://github.com/user-attachments/assets/cd08eadd-7c04-4f3b-b554-4f5e90c5f039" />


## Features
*   **Image Preview**: Displays the uploaded image immediately after a successful upload.
*   **Dynamic UI**: JavaScript updates the label to show the name of the selected file.
*   **Session Management**: Uses PHP sessions to pass messages and file paths between pages.
*   **Security**: Includes an `.htaccess` file to protect the server from malicious scripts.

## Project Structure
*   `index.php` - The main page with the upload form and result display.
*   `handler.php` - The backend script that processes the uploaded file.
*   `style.css` - UI styling for the form, buttons, and layout.
*   `uploads/` - The folder where images are stored.
*   `.htaccess` - A configuration file that disables PHP execution in the uploads folder for safety.

## Security Measures
To keep the server safe, this project uses:
1.  **Execution Block**: The `php_flag engine off` command in `.htaccess` prevents hackers from running PHP scripts if they manage to upload them.
2.  **Anti-Indexing**: Prevents users from viewing the list of all files in the `uploads/` folder.
3.  **Client-side Filter**: The form only accepts `.jpg`, `.jpeg`, `.png`, and `.gif` formats.

## How to Install
1.  Download or clone this repository to your local server (XAMPP, WAMP, etc.).
2.  Make sure the `uploads` folder is created and has write permissions.
3.  Open `index.php` in your browser and try uploading an image!

## Requirements
*   PHP 7.0 or higher
*   Apache Server (for `.htaccess` support)
