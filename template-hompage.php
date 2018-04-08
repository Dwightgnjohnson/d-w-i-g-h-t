<?php /* Template Name: d-w-i-g-h-t Template */ get_header(); ?>

	<main role="main">

<section id="hero" style="margin-top:4vh;">
    <div class="row center-xs left-sm middle-xs test3">

			<div class="col-xs-0 col-sm-1"></div>

			<div class="col-xs-10 col-sm-3 col-md-3 col-lg-3 test1">
				<div class="box" style="border">
					<img style="max-height:250px;" src="<?php echo get_template_directory_uri() . '/img/face.svg'; ?>" alt="my face" />
				</div>
			</div>

			<div class="col-xs-10 col-sm-7 col-md-7 col-lg-7 test2">
				<div class="box">
					<h1>Hi, I'm Dwight Johnson</h1>
					<h4>I live in sunny Los Angeles and love to craft Websites, HTML Emails and smooth Vector Graphics.</h4>

				</div>
			</div>

			<div class="col-xs-0 col-sm-1"></div>

		</div>
</section>

<section id="summary" style="margin-top:8vh;">
		<div class="row">

			<div class="col-xs-12 test2">
				<div class="box">
					<h2>Summary</h2>
				</div>
			</div>
			<div class="col-xs-offset-1 col-xs-10 test1">
				<div class="box">
					<p>I've been coding websites since I graduated from Humboldt State in '09. Since then, I've focused mainly on Wordpress, Ruby on Rails, and Responive Email Development. I've also dipped my toes into jQuery UI.</p>
					<p>Adobe Creative Cloud is also a specialty of mine. I gravitate towards Illustrator for design, Photoshop for Raw Photography, InDesign for producing documents (and Muse for simple websites).</p>
					<p>My past work experience has been entirely in marketing departments. I also like to do side prodjects for small companies and friends.</p>
				</div>
			</div>
    </div>
		<div class="row center-xs">
			<div class="col-xs-8 col-sm-4">
				<a href="<?php echo site_url(); ?>/about"><button class="pink-button">More About Me</button></a>
			</div>
		</div>
</section>

<section id="instagram" style="margin-top:8vh;">
		<div class="row">

			<div class="col-xs-12 test2">
				<div class="box">
					<h2>Specialties</h2>
				</div>
			</div>

		</div>
		<div class="row around-xs">
    <div class="col-xs-8 col-sm-6">
        <div class="box">
					<a href="<?php echo site_url(); ?>/portfolio/graphic-design/"><button class="pink-button">Graphic Design</button></a>
        </div>
    </div>
    <div class="col-xs-8 col-sm-6">
        <div class="box">
					<a href="<?php echo site_url(); ?>/portfolio/web-development/"><button class="pink-button">Web Dev/Design</button></a>

        </div>
    </div>
    <div class="col-xs-8 col-sm-6">
        <div class="box">
					<a href="<?php echo site_url(); ?>/portfolio/email-marketing/"><button class="pink-button">HTML Email</button></a>
        </div>
    </div>
		<div class="col-xs-8 col-sm-6">
				<div class="box">
					<a href="<?php echo site_url(); ?>/portfolio/design-for-print/"><button class="pink-button">Print Design</button></a>
				</div>
		</div>
</div>

</section>
<section id="projects" style="margin-top:8vh;">
<div class="row">
	<div class="col-xs-12 test2">
		<div class="box">
			<h2>Projects</h2>
		</div>
	</div>
</div>
	<div class="center-xs row"><div class="col-xs"><p>Coming Soon</p></div>
</section>
<section id="social" style="margin-top:8vh;">
	<div class="row">
			<div class="col-xs"></div>
			<div class="col-xs">
			<a href="https://www.instagram.com/dddwwwiiiggghhhttt/"><img src="<?php echo get_template_directory_uri() . '/img/instagram.svg'; ?>" alt="instagram" /></a>
		</div>
		<div class="col-xs-0"></div>
		<div class="col-xs">
			<a href="https://github.com/Dwightgnjohnson"><img style="height:30px" src="<?php echo get_template_directory_uri() . '/img/github.svg'; ?>" alt="github" /></a>
		</div>
		<div class="col-xs"></div>

	</div>
</section>

		<br class="clear">
		<br class="clear">
	</main>
<?php get_footer(); ?>
