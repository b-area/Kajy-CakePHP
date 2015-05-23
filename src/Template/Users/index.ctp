
<?php
    $this->append('css');
        echo $this->element('dashboard/styles/top-css');
    $this->end();
?>  
   

    
<?php
    $this->append('sidebar');
        echo $this->element('dashboard/sidebar');
    $this->end();
?>      
    
<div id="page-wrapper">
        <!-- Main contents here -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users</h1>
            </div>
            <!-- /.col-lg-12 -->
            
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        List of users
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Last Name</th>
                                        <th>ACTIONS</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop through users in database -->
                                    <?php foreach ($users as $user): ?>
                                        <tr>
                                            <td><?= $this->Number->format($user->id) ?></td>
                                            <td><?= h($user->first_name) ?></td>
                                            <td><?= h($user->last_name) ?></td>
                                            <td><?= h($user->role) ?></td>
                                            <td class="actions">

                                                <button type="button" class="btn btn-default"><?php echo $this->Html->link('<i class="fa fa-list-alt fa-fw"></i> View', ['action' => 'view', $user->id], ['escape' => false]); ?></button>
                                                <button type="button" class="btn btn-default"><?php echo $this->Html->link('<i class="fa fa-edit fa-fw"></i> Edit', ['action' => 'edit', $user->id], ['escape' => false]); ?></button>
                                                <button type="button" class="btn btn-default"><?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-fw"></i> Delete'), ['action' => 'delete', $user->id], ['escape' => false],['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>

                            <div>
                                <button type="button" class="btn btn-success pull-right"><?php echo $this->Html->link('<i class="fa fa-plus fa-fw"></i> ADD USER',['controller' => 'users', 'action' => 'add', '_full' => true], ['escape' => false]); ?></button>
                            </div>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>

            
               
        </div>
</div>
 
   
<?php
    $this->append('bottomScript');
    echo $this->element('dashboard/scripts/bottom-scripts');
    $this->end();
?>
