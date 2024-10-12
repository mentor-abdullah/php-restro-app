<?php 
include_once('header.php');

?>
<div class="card">
                            <div class="card-header">
                                <strong class="card-title">Table Head</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Menu</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Cat</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    include_once('conn.php');
                                    $stmt = "SELECT * FROM menu";
                                    $result = $conn->query($stmt);
                                  
                                    
                                    print_r($result);
                                    ?>
                                    <tbody>
                                        <?php while($data = $result->fetch_assoc()) {
                                            ?>
                                        <tr>
                                        <th scope="row"><?php echo  $data['menu_id']; ?></th>
                                            <td><?php  echo  $data['menu_name'];  ?></td>
                                            <td><?php  echo  $data['menu_desc'];   ?></td>
                                            <td><?php  echo  $data['menu_catg'];  ?></td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>

<?php 
include_once('footer.php');

?>