

<!DOCTYPE html>
<html>

    <body>
        <script>
            'use strict';
                    let newWindow = open('http://localhost:8080/Project/Pay_Guest.php', 'example', 'width=500,height=600')
                    newWindow.focus();
                    newWindow.onload = function() {
                    let html = ``;
                            newWindow.document.body.insertAdjacentHTML('afterbegin', html);
                    };
        </script>
    </body>

</html>


