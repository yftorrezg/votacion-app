# iniciar servidor

php artisan serve

# crear un Modelo, Migracion, Controlador , Recursos,  Seeder , Factory  

php artisan make:model Vontante -mcrsf 
## para el modelo se reqcmienta iniciar con Mayuscula, y debe estar en singular

## ejecutasla migraciones
php artisan migrate

php artisan migrate:fresh --seed

##listar las rutas
php artisan route:list# votacion-app
# votacion-app-fer
