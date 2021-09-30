# laravel framework discovery

This is a Laravel application that displays the current time in your city !

## Notes

- Problems function env in blade doesn't run 

## Resolve 
- php artisan config:clear 
- php artisan cache:clear

## If the problem continue you can add
- composer dump-autoload
- php artisan view:clear
- php artisan route:clear