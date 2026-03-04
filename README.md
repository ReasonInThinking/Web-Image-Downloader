# 🖼️ PHP Image Uploader

A simple and clean web application for uploading images. This project provides a user-friendly interface and handles file processing with PHP.

<img width="867" height="860" alt="file-load" src="https://github.com/user-attachments/assets/cd08eadd-7c04-4f3b-b554-4f5e90c5f039" />

## ✨ Features
- **Dynamic UI**: Shows the selected file name before uploading using JavaScript.
- **Session Notifications**: Displays success or error messages and image previews using PHP sessions.
- **Automatic Renaming**: Generates unique filenames to prevent overwriting existing files.
- **Responsive Design**: Minimalist and clean styling for the upload form.

## 🚀 How to Use
1. Clone the repository to your local server (XAMPP, WAMP, or MAMP).
2. Ensure the `uploads/` directory has write permissions (`chmod 775`).
3. Open `index.php` in your browser.
4. Select an image (**jpg, jpeg, png, gif**) and click **Send**.

## 🛠️ Tech Stack
- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, JavaScript
- **Server**: Apache

## 🔒 Under the Hood (Security)
While the UI is simple, the backend includes essential protection:
- **Image Validation**: Uses `getimagesize()` to verify that the uploaded file is a real image.
- **File Limits**: Enforces a 1MB maximum file size.
- **Execution Block**: The `.htaccess` file disables the PHP engine in the `uploads/` folder to prevent script execution.
- **Index Protection**: Prevents directory browsing with `Options -Indexes`.

## 📂 Project Structure
- `index.php` — The main page with the upload form.
- `handler.php` — Server-side logic for file validation and storage.
- `style.css` — Custom UI styles.
- `uploads/` — Storage directory for images.
- `.htaccess` — Server configuration for security.

