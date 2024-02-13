<table id="salestable" class="table table-hover table-bordered" style="width:100%">
<thead class="table-light">
        <tr>
            <th class="d-none">ID</th>
            <th width="150">Title</th>
            <th>Area Sqm</th>
            <th>Price</th>
            <th width="350">Payer Email</th>
            <th width="400">Payment ID</th>
            <th>Payment Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../connect.php'; 
            $stmt = $conn->prepare("SELECT * FROM payments");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row= $result->fetch_assoc()):
        ?>
        <tr>
            <td class="d-none"><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['sqm']; ?></td>
            <td>Php <?php $price = $row['amount'];
                    $formatted_price = number_format($price, 2, '.', ',');
                    echo $formatted_price; ?>
            </td>
            <td><?php echo $row['payer_email']; ?></td>
            <td><?php echo $row['payment_id']; ?></td>
            <td><?php echo $row['payment_status']; ?></td>
            <td>
                <span class="d-flex justify-content-center column-gap-2 ">
                    <button class="deleteBtn btn btn-danger btn-sm"
                        data-id="<?php echo $row ['id'];?>">
                        Delete     
                    </button>
                </span>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script>
    $('#salestable').DataTable({
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


        function inputform(){
            $.ajax({
                url: "property-form.php",
                type: 'post',
                success: function(data){
                    $('.property').html(data)
                }
            });
        }
        inputform();
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
                data: {id:id, tablename: 'payments'},
                success: function(data){
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your record has been deleted.",
                        icon: "success"
                    });
                    $.ajax({
                        type: 'POST',
                        url: 'sales-table.php',
                        success: function (data) {
                            $('#sales-container').html(data);
                        },
                    });
                }
            })
        });
    }); 
</script>