    <!DOCTYPE html>
    <html>
        <body>
        <h1>Lista de Personas</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
        </tr>
        @foreach ($personas as $persona)
        <tr>
            <td>{{ $persona->nombre }}</td>
            <td>{{ $persona->apellido }}</td>
            <td>{{ $persona->telefono }}</td>
        </tr>
        @endforeach
    </table>
        </body>
    </html>
