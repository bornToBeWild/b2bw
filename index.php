<!-- include header -->

<?php include ("includes/header.php");?>

<!-- body -->

<body>
	<!-- social bar -->
	<?php include("includes/home-social.php");?>
	<!-- navbar -->
	<?php include("includes/navbar.php");?>
	<!-- home section header -->
	<?php include("includes/home-section-header.php"); ?>
	<!-- video intro -->
	<?php include("includes/home-media.php"); ?>

	<!-- white box -->
	<div class="container white_box">
		<!-- box home-->

		<div class="row"> <!-- ROW -->
			<!-- newsfeed -->
			<div class="col-md-8 col-xs-12"> <!-- newsfeed left-->
				<?php include("includes/home-news.php");?>
			</div> <!-- newsfeed left END -->


			<div class="col-md-3 col-xs-12"> <!-- aside right -->
				<aside>
					<!-- newsletter -->
					<?php include("includes/newsletter.php");?>

					<!-- agenda -->
					<?php include("includes/agenda.php");?>

					<!-- widget -->

					<?php include("includes/widget.php");?>
				</aside>
			</div>
			
		</div>

	</div>
	<!-- row END -->
</div>
<!-- white box END -->

<!-- footer -->
<?php include("includes/footer.php");?>

</body>

<!-- include script.php -->
<?php include ("assets/js/script.php") ?>
<!--  script click more/less -->
<script type="text/javascript">
	$('.see').on('click', function() {
		$('.more').slideToggle();
		$(this).text($(this).text() == 'Less dates' ? 'More dates' : 'Less dates');
	});

</script>
