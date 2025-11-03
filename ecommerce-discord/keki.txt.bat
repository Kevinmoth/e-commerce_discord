@echo off
echo ========================================
echo  SETUP E-COMMERCE DISCORD
echo ========================================
echo.

echo [1/6] Eliminando migraciones anteriores...
del /Q database\migrations\*_create_*_table.php 2>nul

echo [2/6] Creando migraciones...
php artisan make:migration create_roles_table
php artisan make:migration create_usuarios_roles_table
php artisan make:migration create_tipos_producto_table
php artisan make:migration create_categorias_table
php artisan make:migration create_productos_table
php artisan make:migration create_imagenes_producto_table
php artisan make:migration create_licencias_table
php artisan make:migration create_licencias_usuario_table
php artisan make:migration create_archivos_descargables_table
php artisan make:migration create_descargas_table
php artisan make:migration create_cupones_table
php artisan make:migration create_cupones_productos_table
php artisan make:migration create_metodos_pago_table
php artisan make:migration create_pedidos_table
php artisan make:migration create_detalle_pedido_table
php artisan make:migration create_pagos_table
php artisan make:migration create_servicios_programacion_table
php artisan make:migration create_resenas_productos_table
php artisan make:migration create_planes_suscripcion_table
php artisan make:migration create_suscripciones_table
php artisan make:migration create_tickets_soporte_table
php artisan make:migration create_respuestas_ticket_table
php artisan make:migration create_notificaciones_table

echo.
echo [3/6] Migraciones creadas exitosamente!
echo.
echo IMPORTANTE: Ahora debes copiar el contenido de las migraciones
echo que te proporcione y luego ejecutar:
echo.
echo     php artisan migrate:fresh
echo.
pause