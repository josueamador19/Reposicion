<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Productos</title>
</head>
<body class="antialiased">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h2>Lista de productos</h2>
        
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            
            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="p-6">

                <p>
                    <a href="<?php echo e(route('producto.create')); ?>" class="btn btn-primary">Agregar Producto</a>
                </p>

                <table class="table">
                    <thead>
                        <th scope="col" name="id">idProducto</th>
                        <th scope="col" name="descripcion">Descripcion</th>
                        <th scope="col" name="precio">Precio</th>
                        <th scope="col" name="stock">Stock</th>
                        <th scope="col" name="pagaIsv">PagaISV</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(producto->idProducto); ?></td>
                                <td><?php echo e(producto->descripcion); ?></td>
                                <td><?php echo e(producto->precio); ?></td>
                                <td><?php echo e(producto->stock); ?></td>
                                <td><?php echo e(producto->pagaIsv); ?></td>
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>

                </div>

            </div>

        </div>


    </div>
</body>
</html><?php /**PATH C:\Users\Amador\Desktop\Examen Reposicion\examenReposicion\resources\views/productos.blade.php ENDPATH**/ ?>