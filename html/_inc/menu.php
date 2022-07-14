<div class="menu_wrap">	
<!-- header -->
	<div class="header clearfix">
        <h1 class="logo">
            <a href="/">
                <?php 
                if($arrRoute[1]=="main" || empty($arrRoute[1])){
                ?>
                    <img src="/_img/logo.png" alt="" draggable="false">
                <?php }else if($arrRoute[1] == "work"){?>
                    <img src="/_img/logo.png" alt="" draggable="false">
                <?php }else{?>
                    <img src="/_img/menu_logo.png" alt="" draggable="false">
                <?php };?>
                
            </a>
        </h1>
	</div>
    
    <h1 class="menu_logo">
        <a href="/">
            <img src="/_img/menu_logo.png" alt="" draggable="false">
        </a>
    </h1>
    <div class="menu">
        <div class="menu_box">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About me</a></li>
                <li><a href="/work#illustration">Work</a></li>
                <li><a href="/work#process" id="process_btn">Process</a></li>
                <li><a href="/#contact" id="contact_btn">Contact</a></li>
            </ul>
        </div>
    </div>
</div>

