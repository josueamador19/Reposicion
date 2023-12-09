<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Crear Productos</title>
</head>

<body>

    <center>
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?php echo e(route('producto.guardar')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Descripcion">
                        Descripcion
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="descripcion" type="text" placeholder="Descripcion">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="precio">
                        Precio
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="precio" type="number" placeholder="Precio">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="stock">
                        Stock
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="stock" type="number" placeholder="Stock">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pagaIsv">
                        PagaISV
                    </label>
                    <input
                        name="pagaIsv" type="checkbox" placeholder="Stock">
                    
                </div>
                
                
                <div class="flex items-center justify-between">
                    <button class="btn btn-primary">Guardar</button>
                    <a href="<?php echo e(route('producto.inicio')); ?>" class="btn btn-info">Regresar</a>

                </div>
                   
                
            </form>
            
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\Users\Amador\Desktop\Examen Reposicion\examenReposicion\resources\views/crearProducto.blade.php ENDPATH**/ ?>