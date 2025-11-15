docker-compose up -d --build

docker exec -it inventory_management_system bash

composer install
npm install
npm run dev

docker exec -it inventory_management_system bash

cp .env.example .env

php artisan config:clear
php artisan route:clear
php artisan view:clear 
php artisan cache:clear 
php artisan key:generate
php artisan storage:link
php artisan migrate

docker exec -it inventory_management_system bash

npm install tailwindcss @tailwindcss/vite

git add . 
git commit -m "text"
git push origin main

php artisan make:migration create_(name)_table 
php artisan migrate 
php artisan migrate:refresh (recreated all db)

php artisan make:model Category 

php artisan make:controller MainController

php artisan route:list

npm install lucide
https://lucide.dev/icons/