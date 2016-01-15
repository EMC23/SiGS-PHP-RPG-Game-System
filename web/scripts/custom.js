jQuery(document).ready(function() {
    //alert('hi');
    //  jQuery('#myTable').DataTable();
    editor = new $.fn.dataTable.Editor({
        table: "#myTable",
        fields: [{
            label: "id:",
            name: "DT_RowId"
        }, {
            label: "name:",
            name: "name"
        }, {
            label: "PosX:",
            name: "posX"
        }, {
            label: "PosY:",
            name: "posY"
        }
        ]
    });

    // Activate an inline edit on click of a table cell
    $('#myTable').on('click', 'tbody td:not(:first-child)', function (e) {
        editor.inline(this);
    });

    $('#myTable').DataTable({
        dom: "Bfrtip",
        ajax: "/players/api/list",



        columns: [

            { data: "DT_RowId" },
            { data: "name" },
            { data: "posX" },
            { data: "posY" }
        ],












        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        buttons: [
            {extend: "create", editor: editor},
            {extend: "edit", editor: editor},
            {extend: "remove", editor: editor}
        ]
    });
});
