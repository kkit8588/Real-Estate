<table id="propertytable" class="table table-hover table-bordered" style="width:100%">
<thead class="table-light">
        <tr>
            <th class="d-none">ID</th>
            <th width="200">Title</th>
            <th>Type</th>
            <th>S/R</th>
            <th>Area</th>
            <th>Price</th>
            <th width="500">Location</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../connect.php'; 
            $stmt = $conn->prepare("SELECT * FROM properties_tbl");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row= $result->fetch_assoc()):
        ?>
        <tr>
            <td hidden><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['rs']; ?></td>
            <td><?php echo $row['area'].'Sqm'; ?></td>
            <td>Php <?php $price = $row['price'];
                    $formatted_price = number_format($price, 2, '.', ',');
                    echo $formatted_price; ?>
            </td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <button class="deleteBtn btn btn-danger btn-sm" data-id="<?php echo $row ['id'];?>">Delete     
                </button>
                <button class="approveBtn btn btn-primary btn-sm" data-id="<?php echo $row ['id'];?>">Approve     
                </button>
            </td>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script>
    $('#propertytable').DataTable({
         "order": [[0, 'desc']]
            });
    $(document).ready(function() {
        $('.editBtn').click(function(){
            $('#id').val($(this).data('id'));
            id = $(this).data('id')
            $.ajax({
                url: "property-form.php",
                type: 'post',
                data: {id:id},
                success: function(data){
                    $('.property').html(data)
                }
            })
        });
    });

    $(document).on('click', '.deleteBtn', function() {
                Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => { 
                $('#id').val($(this).data('id'));
                id = $(this).data('id');
                $.ajax({
                    url: "../controller/delete-controller.php",
                    type: 'post',
                    data: {id:id, tablename: 'properties_tbl'},
                    success: function(data){
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your record has been deleted.",
                            icon: "success"
                        });
                        $.ajax({
                            type: 'POST',
                            url: 'property-table.php',
                            success: function (data) {
                                $('#property-container').html(data);
                            },
                        });
                    }
                })
            });
    }); 

    $(document).on('click', '.approveBtn', function() {
    Swal.fire({
        title: "You want to approve?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes!"
    }).then((result) => { 
        if (result.isConfirmed) {
            var id = $(this).data('id');

            $.ajax({
                url: "../controller/approve.php",
                type: 'post',
                data: { id: id, tablename: 'properties_tbl' }, //database table name
                dataType: 'json', // Specify the expected data type
                success: function(response) {
                    if (response.output == 'Success') {
                        Swal.fire({
                            text: "Property approved successfully.",
                            icon: "success"
                        });

                        // Reload the table data
                        $.ajax({
                            type: 'POST',
                            url: 'property-table.php',
                            success: function (data) {
                                $('#property-container').html(data);
                            },
                        });
                    } else {
                        Swal.fire({
                            text: "Failed to update status.",
                            icon: "error"
                        });
                    }
                }
            });
        }
    });
});
</script>