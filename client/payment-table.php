<?php include 'sessionstart.php';?>
<table id="salestable" class="table table-hover table-bordered" style="width:100%">
<thead class="table-light">
        <tr>
            <th class="d-none">ID</th>
            <th width="200">Title</th>
            <th>Area Sqm</th>
            <th>Price</th>
            <th width="500">Payment ID</th>
            <th>Payment Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../connect.php'; 
            $client_email = $_SESSION['email'];
            $stmt = $conn->prepare("SELECT * FROM payments WHERE client_email=?");
            $stmt->bind_param("s", $client_email);
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
            <td><?php echo $row['payment_id']; ?></td>
            <td><?php echo $row['payment_status']; ?></td>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script>
    $('#salestable').DataTable({
                "order": [[0, 'desc']] // Assuming 'id' is the first column (index 0)
            });
</script>