<div class="container pt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>SHOW MEMBER</h2>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>img</th>
                        <th>position</th>
                        <th>name</th>
                        <th>lname</th>
                        <th>date_save</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($query as $rs){ ?>
                    <tr>
                        <td><?php echo $rs->m_id;?></td>
                        <td><img src="<?php echo base_url('img');?>/<?php echo $rs->m_img;?>" width="100px"></td>
                        <td><?php echo $rs->pname;?></td>
                        <td><?php echo $rs->m_name;?></td>
                        <td><?php echo $rs->m_lname;?></td>
                        <td><?php echo $rs->m_datesave;?></td>
                        <td>
                <a href="<?php echo site_url('insertdata/edit/').$rs->m_id;?>">Edit</a>
                        </td>
                        <td>
                <a href="<?php echo site_url('insertdata/delete/').$rs->m_id;?>"
                onclick="return confirm('ยืนยัน');">Delete</a>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
