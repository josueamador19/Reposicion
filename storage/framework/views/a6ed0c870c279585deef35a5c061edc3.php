<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Proveedores</title>
</head>
<body class="antialiased">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h2>Lista de proveedores</h2>
        
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            
            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="p-6">

                <p>
                    <a href="<?php echo e(route('proveedor.create')); ?>" class="btn btn-primary">Agregar Proveedor</a>
                </p>

                <table class="table">
                    <thead>
                        <th scope="col" name="id">idProveedor</th>
                        <th scope="col" name="nombre">Nombre</th>
                        <th scope="col" name="fechaRegistro">FechaRegistro</th>
                        <th scope="col" name="telefono">telefono</th>
                        <th scope="col" name="correo">correo</th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($proveedor->idProveedor); ?></td>
                                <td><?php echo e($proveedor->nombre); ?></td>
                                <td><?php echo e($proveedor->fechaRegistro); ?></td>
                                <td><?php echo e($proveedor->telefono); ?></td>
                                <td><?php echo e($proveedor->correo); ?></td>
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>

                </div>

            </div>

        </div>


    </div>
</body>
</html><?php /**PATH C:\Users\Amador\Desktop\Examen Reposicion\examenReposicion\resources\views/proveedores.blade.php ENDPATH**/ ?>