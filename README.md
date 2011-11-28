SmartSuper es una aplicación movil que te entrega ofertas geolocalizadas cuando vas de compras.

Simplemente marcas los departamentos que vas a visitar y te muestra los productos relevantes
por cada categoría.

NOTA: no es una aplicación real, es un prototipo que desarrollé para el #swpuebla en menos de 8 horas.

Instalación
-----------

El repositorio es completamente independiente, de modo que no requiere de **Tetl** instalado localmente para funcionar
pues ya viene incluido.

Para iniciar localmente solo hay que descargar o clonar el repo, luego lo ubicamos en alguna ruta accesible por
nuestro localhost. Accedemos y nos indicarà que el archivo `database/db.sqlite` no existe así que lo creamos y
asignamos los permisos correspondientes dentro de la carpeta de `smartsuper`.

    $ touch database/db.sqlite
    $ chmod -R 777 database

Podemos ejecutar las migraciones si contamos con la utilidad `atl` instalada.

    $ atl db:migrate
    
O en su defecto tambièn se pueden ejecutar las migraciones desde la URL con el query.

    http://localhost/smartsuper/?migrate=1


Créditos
--------

La idea no es mia, tan solo programé el prototipo a partir de los mockups que me proporcionaron.

[http://smartsuper.herokuapp.com/](http://smartsuper.herokuapp.com/)
