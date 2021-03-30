<?php
//    echo '<pre>';
//    print_r($_POST);
//
//    echo isset($_POST['btn']);

    $result =' ';
    if(isset($_POST['btn'])) {
        require_once 'FullName.php';
        $fullName = new FullName();
        $result = $fullName->makeFullName($_POST['first_name'], $_POST['last_name']);
    }

?>
<form action="" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" value="<?php echo $result; ?>" name="full_name"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SubmiT"></td>
        </tr>
    </table>
</form>
