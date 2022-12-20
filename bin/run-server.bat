set APP_DIR=%cd%
php -d display_errors -d auto_prepend_file=%cd%\vendor\autoload.php -S localhost:8001 -t public/
