<header>
	<a href="<?php echo $rootpath; ?>inicio"><img id="logo" src="<?php echo $rootpath; ?>_images/logo.svg"/> </a>
    <div class="menu-container">
      <div class="bars"><span></span><span></span><span></span>
        <div class="other-bar"></div>
      </div>
    </div>

	<menu id="menu_header">
    
    	<menuitem><a href="<?php echo $rootpath; ?>inicio">Inicio</a></menuitem>
        <menuitem><a href="<?php echo $rootpath; ?>nosotros">Nosotros</a></menuitem>
        <menuitem><a href="<?php echo $rootpath; ?>reclutamiento">Reclutamiento</a></menuitem>
        <!--<menuitem><a href="">Equipo</a></menuitem>-->
        <menuitem><a href="<?php echo $rootpath; ?>contacto">Contacto</a></menuitem>
        <menuitem><a <?php echo $login_logout;?>><?php echo $logText; ?></a></menuitem>
    </menu>
</header>