<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>

    <div class="container" style="width:80%;margin:auto;">

        <br><br>
        <input type="button" value="Click Test" id="my_btn_1" class="btn btn-info">
        <br>
        <br>
        <br>
        <input type="button" value="Ajax Test" id="my_btn_2" class="btn btn-success">

    </div>
    <script type="text/javascript">
        $(function() {

            $("#my_btn_1").on("click", function() {
                var myvar = 200;
                console.log("ปุ่มถูกด");
                console.log("แสดงค่าตัวแปร -> " + myvar);
            });

            $("#my_btn_2").on("click", function() {
                var mydata = 100;
                $.post("ajax_console.php", {
                    myvar: mydata
                }, function(data) { // data คือค่าที่ได้จากการ echo แสดงในไฟล์ ajax_console.lphp
                    console.log("แสดงค่าตัวแปร -> " + mydata);
                    console.log("แสดงค่าจาก ajax -> " + data);
                });
            });

        });
    </script>
</body>

</html>