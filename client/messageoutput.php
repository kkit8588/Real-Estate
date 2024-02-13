<?php
                include '../connect.php';
                session_start();
                $incoming_id = $_POST['friend_id'];
                $outgoing_id = $_SESSION['unique_id'];

                $output = "";
                        $sql = "SELECT * FROM messages LEFT JOIN user_tbl ON user_tbl.unique_id = messages.outgoing_msg_id
                                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
                        $query = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($query) > 0){
                            while($row = mysqli_fetch_assoc($query)){
                        $message = htmlspecialchars($row['msg']); // Sanitize the message to prevent XSS attacks

                        if ($row['outgoing_msg_id'] == $outgoing_id) {
                            echo"<div class='text-bg-secondary p-2 me-auto rounded' style='max-width: 20em; border-bottom-left-radius: 0 !important;'>$message</div>";
                        } else {
                            echo"<div class='text-bg-primary p-2 ms-auto rounded' style='max-width: 20em; border-bottom-right-radius: 0 !important;'>$message</div>";
                        }
                    }
                }
          
            ?>