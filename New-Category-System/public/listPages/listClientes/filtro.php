<?php
    $filtragem = $_POST['filtragem'];
    if(isset($filtragem)){
        if($filtragem == "Mostrar Último"){
?>
            </tr>
                <td>{{ $ultimo->id }}</td>
                <td>{{ $ultimo->clienteNome }}</td>
                <td>{{ $ultimo->email }}</td>
                <td>{{ $ultimo->telefone }}</td>
                <td>{{ $ultimo->endereco }}</td>
            </tr>
<?php
        }else{
?>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->clienteNome }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->endereco }}</td>
                </tr>
            @endforeach
<?php          
        }
    }
?>