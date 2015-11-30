<h1>Registration Info</h1>


<table border = '1'>
    <th>
        <tr>
            <td><b>First Name</b></td>
            <td><b>Last Name</b></td>
            <td><b>Designation</b></td>
            <td><b>Email id</b></td>
            <td><b>Password</b></td>
        </tr>
    </th>
    <tbody>
    <?php foreach ($reg as $r):?>
        <tr>
            <td><?php echo $r->fname;?></td>
            <td><?php echo $r->lname;?></td>
            <td><?php echo $r->designation;?></td>
            <td><?php echo $r->email;?></td>
            <td><?php echo $r->pass;?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
