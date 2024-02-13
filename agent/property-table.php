<?php include 'sessionstart.php';?>
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
            $agent_email = $_SESSION['email'];
            $unique_id = $_SESSION['unique_id'];
            $stmt = $conn->prepare("SELECT * FROM properties_tbl WHERE agent_email=? AND unique_id=?");
            $stmt->bind_param("ss", $agent_email, $unique_id);
            $stmt->execute();
            $result = $stmt->get_result();
            while($row= $result->fetch_assoc()):
        ?>
        <tr>
            <td class="d-none"><?php echo $row['id']; ?></td>
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
                <span class="d-flex justify-content-center column-gap-2 ">
                    <button data-bs-target="#agent-modal" data-bs-toggle="modal"  class="editBtn btn btn-warning btn-sm"
                        data-id="<?php echo $row ['id'];?>"

                        >Edit     
                    </button>
                    <button class="deleteBtn btn btn-danger btn-sm"
                        data-id="<?php echo $row ['id'];?>">
                        Delete     
                    </button>
                </span>
            </td>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script>
    $('#propertytable').DataTable({
                "order": [[0, 'desc']] // Assuming 'id' is the first column (index 0)
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
</script>