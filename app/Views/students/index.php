<div class="container">
    <div class="row">
        <?php echo '<h3>'.$title.'</h3>'?>
        <div class="d-flex justify-content-center">
            <table class="table secondary">
                <thead>
                    <tr>
                        <th>Name</th>    
                        <th>Email</th>    
                        <th>Group</th>    
                        <th>Rate</th>    
                        <th>Image</th>    
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach( $students as $item )
                        {
                            echo '<tr>';
                                echo '<td>'.$item['name'].'</td>';
                                echo '<td>'.$item['email'].'</td>';
                                echo '<td>'.$item['groupid'].'</td>';
                                echo '<td>'.$item['rate'].'</td>';
                                echo '<td>'.$item['imagepath'].'</td>';
                            echo '<tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>