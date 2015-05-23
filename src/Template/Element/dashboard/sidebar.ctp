<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-home fa-fw"></i> HOME</a>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-users fa-fw"></i> USERS',['controller' => 'users', 'action' => 'index', '_full' => true], ['escape' => false]); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-university fa-fw"></i> CLASSES',['controller' => 'kilasies', 'action' => 'index', '_full' => true], ['escape' => false]); ?>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> SETTINGS</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
