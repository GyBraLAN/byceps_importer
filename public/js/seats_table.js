$(document).ready( function () {
    $('#dataTable').DataTable(
	{
        "processing": true,
        "serverSide": true,
        "ajax": "get",
		"columns": [
            { "data": "id" },
            { "data": "area" },
            { "data": "x" },
            { "data": "y" },
            { "data": "category" },
            { "data": "label" },
            { "data": "type" }
        ]
    }
);
} );