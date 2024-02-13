<table id="clienttable" class="table table-hover table-bordered" style="width:100%">
<thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../connect.php'; 
            $i=1;
            $sqlSelect = $conn->query("SELECT * FROM user_tbl WHERE (type='Agent' OR type='Client')");
            while($row= $sqlSelect->fetch_assoc()):
        ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['type']; ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<script>
    $('#clienttable').DataTable()
</script>