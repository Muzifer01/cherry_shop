<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- DataTables Editable CSS (opcional para mejorar la apariencia) -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.jqueryui.min.css">

<h1>Car Shop</h1>
<h1>{{$arg}}</h1>

<section class="container table-container">
    <h2 class="text-center mb-4">Tabla Editable con DataTables</h2>
    
    <table id="editableTable" class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Posición</th>
                <th>Oficina</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ana</td>
                <td>Ingeniera</td>
                <td>Madrid</td>
                <td>$3200</td>
            </tr>
            <tr>
                <td>Mario</td>
                <td>Diseñador</td>
                <td>Barcelona</td>
                <td>$4200</td>
            </tr>
        </tbody>
    </table>
</section>
<script>
$(document).ready(function() {
    // Inicializamos DataTables
    let table = $('#editableTable').DataTable();
    
    // Hacemos las celdas editables cuando se hace doble clic en ellas
    $('#editableTable tbody').on('dblclick', 'td', function() {
        let cell = table.cell(this);
        let originalValue = cell.data();
        
        // Reemplazamos el contenido de la celda con un campo de texto editable
        $(this).html('<input type="text" value="' + originalValue + '"/>');
        
        // Guardar el nuevo valor cuando se pierde el foco (on blur)
        $('input', this).on('blur', function() {
            let newValue = $(this).val();
            cell.data(newValue).draw(); // Actualizamos la celda con el nuevo valor
        });
        
        // Detectar la tecla Enter para guardar también
        $('input', this).on('keypress', function(e) {
            if (e.which === 13) { // Enter key
                let newValue = $(this).val();
                cell.data(newValue).draw();
            }
        });
    });
});    
</script>
<style>
    .table-container {
        max-width: 1000px;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    
    .dataTables_wrapper .dataTables_filter input {
        border-radius: 30px;
    }

    table.dataTable thead {
        background-color: #6c757d;
        color: white;
    }

    table.dataTable {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 15px; /* Espacio entre filas */
    }

    table.dataTable td {
        padding: 10px;
        border-top: 1px solid #dee2e6;
        background-color: #f8f9fa;
    }

    table.dataTable tbody tr:hover {
        background-color: #f1f3f5;
    }

    input[type="text"] {
        width: 100%;
        border: none;
        background: #f8f9fa;
    }
</style>
