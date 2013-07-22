    <section class="banner">
     <div id="slides">
        <div class="slides_container">

		<?php
		echo $this->Html->link($this->Html->image("slider_1.jpg", array("alt" => "Slide 1", "title"=> "banner-1", "target" => "_blank", "width" => "996", "height" => "340")), "#", array('escape' => false));?>

		<?php
		echo $this->Html->link($this->Html->image("slider_1.jpg", array("alt" => "Slide 2", "title"=> "banner-2", "target" => "_blank", "width" => "996", "height" => "340")), "#", array('escape' => false));?>

		<?php
		echo $this->Html->link($this->Html->image("slider_1.jpg", array("alt" => "Slide 3", "title"=> "banner-3", "target" => "_blank", "width" => "996", "height" => "340")), "#", array('escape' => false));?>
        </div>
       
	<?php
		echo $this->Html->link($this->Html->image("arrow-prev.png", array("alt" => "Arrow Prev", "class" => "prev", "width" => "24", "height" => "43")), "#", array('escape' => false));?>
	<?php
		echo $this->Html->link($this->Html->image("arrow-next.png", array("alt" => "Arrow Next", "class" => "next", "width" => "24", "height" => "43")), "#", array('escape' => false));?>

</div>
    </section>
    
