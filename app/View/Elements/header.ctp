<header>
    	<h1 class="logo">
		<?php
		echo $this->Html->link($this->Html->image("surfing_logo.png", array("alt" => "surfing_logo", "title" => "Surfing_logo", "width" => "283", "height" => "65")), "#", array('escape' => false));?>
		</a></h1>
        <div class="joinus">
        <ul>
        	<li>
			
				<?php  echo $this->Html->link('Join us on Facebook ', '#', array('class' => 'keepup'));?><br>
				<?php echo $this->Html->link('and keep up to date with all the news', array('class' => 'keepup'));?>
				
			</li>
            <li>
			<?php
		echo $this->Html->link($this->Html->image("facebook_icon.png", array("alt" => "facebook_icon", "class" => "facebookicon")), "#", array('escape' => false));?>
			</a></li>
        </ul>
        </div>
    </header>