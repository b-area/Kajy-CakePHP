
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
                    <h1 class="page-header">Classes</h1>
                </div>
                <!-- /.col-lg-12 -->
                
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Classes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>CLASS NAME</th>
                                            <th>TITULAIRE</th>
                                            <th>ACTIONS</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($kilasies as $kilasy): ?>
                                        <tr>
                                            <td><?= $this->Number->format($kilasy->id) ?></td>
                                            <td><?= h($kilasy->section) ?></td>
                                            <td><?= $this->Number->format($kilasy->teacher_responsible) ?></td>
                                            <td class="actions">
                                                <button type="button" class="btn btn-default"><?php echo $this->Html->link('<i class="fa fa-list-alt fa-fw"></i> View', ['action' => 'view', $kilasy->id], ['escape' => false]); ?></button>
                                                <button type="button" class="btn btn-default"><?php echo $this->Html->link('<i class="fa fa-edit fa-fw"></i> Edit', ['action' => 'edit', $kilasy->id], ['escape' => false]); ?></button>
                                                <button type="button" class="btn btn-default"><?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-fw"></i> Delete'), ['action' => 'delete', $kilasy->id], ['escape' => false],['confirm' => __('Are you sure you want to delete # {0}?', $kilasy->id)]) ?></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <div>
                                    <button type="button" class="btn btn-success pull-right"><?php echo $this->Html->link('<i class="fa fa-plus fa-fw"></i> ADD CLASS',['controller' => 'kilasies', 'action' => 'add', '_full' => true], ['escape' => false]); ?></button>
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
