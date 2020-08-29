/*  Ariel Simantov  207366865
    Liron Shemesh 301569075
*/


function editModal(){
$(document).ready(function() {

    //  append values in input fields
    $(document).on('click', 'a[data-role=update]', function () {
        var id = $(this).data('id');
        var name = $('#'+id).children('td[data-target=name]').text();
        var description = $('#'+id).children('td[data-target=description]').text();
        var price = $('#'+id).children('td[data-target=price]').text();
        var picture = $('#'+id).children('td[data-target=picture]').html().toString();
        var pictureFirstTrimmed = picture.replace("<img src=\"images/" , "");
        var pictureSecondTrimmed = pictureFirstTrimmed.replace("\">","");
        $('#id_update').val(id);
        $('#name').val(name);
        $('#description').val(description);
        $('#price').val(price);
        $('#picture').val(pictureSecondTrimmed);

        //$('#editModal').modal('toggle');
    });
    // now create event to get data from fields and update in database

    $('#submitUpdate').click(function () {
        var id = $('#id').val();
        var name = $('#name').val();
        var description = $('#description').val();
        var price = $('#price').val();
        var picture = $('#picture').val();

        $.ajax({
            url: 'index.php',
            method: 'POST',
            data: {name: name, description: description, price: price, picture: picture, id: id},
            success: function (response) {
                // now update user record in table
                $('#' + id).children('td[data-target=name]').text(name);
                $('#' + id).children('td[data-target=description]').text(description);
                $('#' + id).children('td[data-target=price]').text(price);
                $('#' + id).children('td[data-target=picture]').text(picture);
                //$('#editModal').modal('toggle');

            }
        });
    });
});
}

function filterNames() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("filter");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function ajaxTable() {
    $.ajax({
        type: "POST",
        url:"products.php",
        success: function(data)
        {
            $('#myTable').html(data);
        }
    });
}
function refreshTable() {
    ajaxTable();
}





