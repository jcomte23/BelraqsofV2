$(document).ready( function () {
    $('#TableClientes').DataTable({
        responsive:true,
        autoWidth:false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registros por página",
            "zeroRecords": "No se encontró ningún resultado",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            'search':'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        },
        "order":[ [6, 'desc'],[0, 'asc']]
    });

    $('#TableProveedores').DataTable({
        responsive:true,
        autoWidth:false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registros por página",
            "zeroRecords": "No se encontró ningún resultado",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            'search':'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        },
        "order":[ [6, 'desc'],[0, 'asc']]

    });

    $('#TableExistencias').DataTable({
        responsive:true,
        autoWidth:false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registros por página",
            "zeroRecords": "No se encontró ningún resultado",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            'search':'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        },
        "order":[ [5, 'desc'],[0, 'asc']]
    });

    $('#TableVentas').DataTable({
        responsive:true,
        autoWidth:false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registros por página",
            "zeroRecords": "No se encontró ningún resultado",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            'search':'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        },
        "order":[ [7, 'desc'],[0, 'asc']]
    });

    $('#TableUsuarios').DataTable({
        responsive:true,
        autoWidth:false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registros por página",
            "zeroRecords": "No se encontró ningún resultado",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            'search':'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        },
        "order":[ [7, 'desc'],[0, 'asc']]
    });

} );


