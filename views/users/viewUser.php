
<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
            <input class="search" placeholder="Search" />
        </div>

        <div class="pull-right">
            <a href="index.php?action=createUser"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
        </div>
    </div>
    <form action="employee.php" method="POST">
        <table class="table-bordered col-md-12">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="uname">Username</th>
            <th class="sort text-center" data-sort="name">Name</th>
            <th class="sort text-center" data-sort="password">Password</th>
            <th class="sort text-center">Action</th>
            <!-- IMPORTANT, class="list" have to be at tbody -->
            <tbody class="list">
                <?php 
                if($data['users'] != "") {
                    $i = 1;
                    foreach($data['users'] as $users) {
                ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $users['username']?></td>
                    <td><?php echo $users['name']?></td>
                    <td><?php echo $users['password']?></td>
                    <td>
                        <a href="index.php?action=getUpdate&id=<?php echo $users['id'];?>"><i class="glyphicon glyphicon-edit" style="color:blue;"></i></a>&nbsp;
                        <a href="index.php?action=deleteUser&id=<?php echo $users['id'];?>"><i class="glyphicon glyphicon-trash" style="color:red;"></i></a> 
                    </td>
                </tr>
                <?php
                    $i++;
                    }
                }else {
                    echo "<tr><td> colspan='6'>No record found...!</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </form>
</div>

<script>
    var options = {
        valueNames: ['id', 'uname', 'name', 'password']
    };

    var userList = new List('users', options);
</script>