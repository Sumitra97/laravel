echo 'Generate Migrations'
echo '..................'

php artisan make:migration create_units_table --create=tbl_units
php artisan make:migration create_colors_table --create=tbl_colors
php artisan make:migration create_categories_table --create=tbl_categories
php artisan make:migration create_items_table --create=tbl_items

echo 'Generate Models'
echo '...............'

php artisan make:model Unit 
php artisan make:model Color 
php artisan make:model Category 
php artisan make:model Item 


echo 'Generate Controllers'
echo '...............'

php artisan make:controller UnitController -r -m Unit
php artisan make:controller ColorController -r -m Color
php artisan make:controller CategoryController -r -m Category
php artisan make:controller ItemController -r -m Item

echo '..............'
echo 'finished'



