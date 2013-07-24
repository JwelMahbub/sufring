<!DOCTYPE HTML>
<html lang="en">
<head>
<title><?php echo Configure::read('sitetitle'); ?></title>
<?php echo $this->Html->meta('icon', $this->Html->url('/favicon.ico')); ?>
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>-->
<?php echo $this->Html->css(array('http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic','reset','demo','calendar','custom_2','style'));?>


<!--Default[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--default<script src="js/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/modernizr-latest.js" type="text/javascript"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>-->
		<?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js','slides.min.jquery','demofunction','modernizr.custom.63321','jquery.calendario',)); ?>
<!------   Slide Java script ------>
	<!--<script src="js/slides.min.jquery.js"></script>-->
	<?php echo $this->Html->script('slides.min.jquery'); ?>
    <!--<script src="js/demofunction.js"></script>-->
	<?php echo $this->Html->script('demofunction'); ?>
    <!------   Calander Java script START ------>
    <!--<script src="js/modernizr.custom.63321.js"></script>-->
	<?php echo $this->Html->script('modernizr.custom.63321'); ?>
    	<!--<script type="text/javascript" src="js/jquery.calendario.js"></script>-->
		<?php echo $this->Html->script('jquery.calendario'); ?>
		<!--<script type="text/javascript" src="js/data.js"></script>-->
		<?php echo $this->Html->script('data'); ?>
		<script type="text/javascript">	
			$(function() {
			
				var transEndEventNames = {
						'WebkitTransition' : 'webkitTransitionEnd',
						'MozTransition' : 'transitionend',
						'OTransition' : 'oTransitionEnd',
						'msTransition' : 'MSTransitionEnd',
						'transition' : 'transitionend'
					},
					transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
					$wrapper = $( '#custom-inner' ),
					$calendar = $( '#calendar' ),
					cal = $calendar.calendario( {
						onDayClick : function( $el, $contentEl, dateProperties ) {

							if( $contentEl.length > 0 ) {
								showEvents( $contentEl, dateProperties );
							}

						},
						caldata : codropsEvents,
						displayWeekAbbr : true
					} ),
					$month = $( '#custom-month' ).html( cal.getMonthName() ),
					$year = $( '#custom-year' ).html( cal.getYear() );

				$( '#custom-next' ).on( 'click', function() {
					cal.gotoNextMonth( updateMonthYear );
				} );
				$( '#custom-prev' ).on( 'click', function() {
					cal.gotoPreviousMonth( updateMonthYear );
				} );

				function updateMonthYear() {				
					$month.html( cal.getMonthName() );
					$year.html( cal.getYear() );
				}

				// just an example..
				function showEvents( $contentEl, dateProperties ) {

					hideEvents();
					
					var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
						$close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

					$events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
					
					setTimeout( function() {
						$events.css( 'top', '0%' );
					}, 25 );

				}
				function hideEvents() {

					var $events = $( '#custom-content-reveal' );
					if( $events.length > 0 ) {
						
						$events.css( 'top', '100%' );
						Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

					}

				}
			
			});
		</script> <!------   Calander Java script END  ------>

</head>

<body>
<div id="wrapper">
<!-- start html block -->
    <?php echo $this->element('header'); ?>
	<?php echo $this->element('nev'); ?>
	<?php echo $this->element('banner'); ?>
	<?php echo $this->element('content'); ?>
	<?php echo $this->element('calender'); ?>
	<?php echo $this->element('footer'); ?>


<!-- end html block -->
asdfasdf
asdffasdf
asdfasdf
asdfasdff
asdfasdf
asdfasdf

</div>
</body>


</html>
