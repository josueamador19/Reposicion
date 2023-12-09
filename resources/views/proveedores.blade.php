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
                    <a href="{{route('proveedor.create')}}" class="btn btn-primary">Agregar Proveedor</a>
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
                        @foreach($proveedores as $proveedor)
                            <tr>
                                <td>{{$proveedor->idProveedor}}</td>
                                <td>{{$proveedor->nombre}}</td>
                                <td>{{$proveedor->fechaRegistro}}</td>
                                <td>{{$proveedor->telefono}}</td>
                                <td>{{$proveedor->correo}}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

                </div>

            </div>

        </div>


    </div>
</body>
</html>