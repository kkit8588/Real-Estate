<script>
    $(document).ready(function() {
        $('.sendmessage').submit(function (e) {
            e.preventDefault();

            var sendData = $(this).serialize();
            $.ajax({
                type: 'post',
                url: 'sendmessage.php',
                data: sendData,
                success: function () {
                    messageoutput();
                    $('#sendmessage').val("");
                }
            });
        });

        function messageoutput() {
            $.ajax({
                url: 'messageoutput.php',
                type: 'POST',
                data: { friend_id: <?php echo $_GET['friend_id'] ?> },
                success: function (data) {
                    $('#messageoutput').html(data);
                    //scroll bottom
                    var element = $('#messageoutput');
                    var scrollHeight = element.prop('scrollHeight');
                    element.scrollTop(scrollHeight);
                },
            });

        }

        messageoutput();
        setInterval(messageoutput, 1000);
     });
 </script>