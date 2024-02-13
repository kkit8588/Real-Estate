<table id="feedbacktable" class="table table-hover table-bordered" style="width:100%">
<thead class="table-light">
        <tr>
            <th width="30">ID</th>
            <th width="200">Name</th>
            <th width="200">Email</th>
            <th width="500">Message</th>
            <th width="70">Type</th>
            <th width="70">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../connect.php'; 
            $i=1;
            $sqlSelect = $conn->query("SELECT * FROM feedback_tbl ORDER BY id DESC");
            while($row= $sqlSelect->fetch_assoc()):
        ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['feedback']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#reply">Reply  <i class="fa-solid fa-reply-all"></i></button>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>


<script>
    $('#feedbacktable').DataTable({
        "order": [[0, 'desc']]
    });
    
</script>