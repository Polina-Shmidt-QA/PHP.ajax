<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
                integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
                crossorigin="anonymous">
        </script>

</head>
<body>


        <input type="text" name="title" class="title"><br><br>
        <textarea name="content" cols="30" rows="10" class="content"></textarea><br><br>
        <button type="submit" class="otpravka">Отправить</button>


<script>
    $(document).ready(function (){
        $('button.otpravka').on('click', function (){
            let titleValue = $('input.title').val();
            let contentValue = $('textarea.content').val();

// отправить каким-то образом наши данные в some.php

            $.ajax({
                method: "POST",
                url: "some.php",
                data: { title: titleValue, content: contentValue }
            })
                .done(function( msg ) {
                    // alert( "Data Saved: " + msg );
                });

            $('input.title').val('');
            $('textarea.content').val('');

        })
    })
</script>

</body>
</html>


