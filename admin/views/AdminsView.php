<?php 
    //load file layout.php
    $this->layoutPath = "Layout.php";
 ?>

 </style>
<div class="col-md-12">
    <h2 style="text-align: center">Quản lý Admin</h2>
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=admins&action=create" class="btn btn-primary">Add admin</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List Admin</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th style="width:120px;">Chức năng</th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name ?></td>
                    <td><?php echo $rows->email ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=admins&action=update&id=<?php echo $rows->id; ?>">
                            <img style="width: 18px" src="../assets/frontend/images/edit.png" alt="update">
                        </a>&nbsp;
                        <a href="index.php?controller=admins&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">
                            <img style="width: 18px" src="../assets/frontend/images/delete.png" alt="delete">
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
        </div>
    </div>
</div>