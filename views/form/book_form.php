<!---
Si se ocupa hay que encerrar el codigo en php <?php ?>

    $connection = mysqli_connect('localhost', 'root', '','chimucakes_bd');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $date = $_POST['date'];

        $request = "insert into book_db(name, email, phone, address, date) 
        values ('$name', '$email', '$phone', '$address', '$date')";

        mysqli_query($connection, $request);

        header('location:../products/book.php');
    }else{
        echo 'algo salio mal vuelva a cargar los datos';
    }
--->