<?php

require_once($this->config->item("base_dir").'public/temas/admin/header.php');
?>

                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                
                                <li><a href="<?php echo base_url() ?>servico/suporte"><i class="menu-icon icon-cogs"></i>Suporte</a></li>

                                <li><a href="task.html"><i class="menu-icon icon-globe"></i>Páginas<b class="label orange pull-right">
                                    0</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                                                        
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Mais </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="<?php echo base_url();  ?>login/"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="<?php echo base_url();  ?>usuario/perfil/"><i class="icon-inbox"></i>Perfil </a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url();  ?>logout"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
<?php
//require_once($this->config->item("base_dir").'public/temas/admin/content.php');
require_once(APPPATH."modules/servico/views/".$content.".php");

require_once($this->config->item("base_dir").'public/temas/admin/footer.php');
