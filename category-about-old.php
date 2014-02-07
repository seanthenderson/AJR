<?php get_header(); ?>

	<div id="about-title"><a href="<?php echo home_url( '/' ); ?>/category/about">about</a></div>
	<div>
		<span id="about-title-line" class="page-title-line"></span>
	</div>
	
	<div id="about-section-title-wrapper">
		<div class="about-section-title">About AJR</div>
		<div class="about-section-title">Contact Information</div>
		<div class="about-section-title">Staff</div>
		<div class="about-section-title">Blogger Information</div>
		<div class="about-section-title">Copyright Policies</div>
		<div class="about-section-title">Advertising</div>
		<div class="about-section-title">Donations</div>
		<div class="about-section-title">Archives</div>
		<div id="about-section-arrow"></div>
	</div>
	
	<div id="about-section-wrapper">
		<div id="about-about-ajr" class="about-section">
			<p>The American Journalism Review&rsquo;s mission is to promote quality and innovation in journalism by reporting and educating on best practices and evolutionary changes in news media worldwide.</p>
			<p>AJR operates as an integral part of the University of Maryland&rsquo;s Philip College of Journalism, where students play a key role in reporting,  writing and producing news for AJR&rsquo;s daily digital news service.</p>
			<p>AJR converted to an all-digital publication in 2013 after nearly four decades as a print magazine. Its focus of coverage is innovation and entrepreneurship in journalism and related media. A key goal is to encourage excellence in digital journalism by reporting on how news organizations are changing and evolving to produce and sustain meaningful journalism in the digital age.</p>
			<h3 style="font-size: 25px; font-weight: 600; margin-bottom: 30px;">History of AJR</h3>
			<p>AJR started life in October 1977 as a print magazine called the Washington Journalism Review. A decade later, in May 1987, its owners donated the magazine to the University of Maryland&rsquo;s College of Journalism, where it was renamed the American Journalism Review in 1993 and converted to an independent nonprofit organization.</p>
			<p>The early mission of AJR was journalism criticism, to serve as a watchdog of the watchdogs by providing deeply reported, ideology&#8213;free coverage of how news organizations carries out their work.</p>
			<p>AJR conducted many in&#8213;depth reporting ventures, including the Project on the State of the American Newspaper in 1998, consisting  of  18 long&#8213;form articles (15,000 words apiece) analyzing the state of the newspaper industry.  The project cost close to $2 million and was sponsored by  the Pew Charitable Trusts.</p>
			<p>Read more about the <a href="http://www.ajr.org/article.asp?id=2689" target="_blank">history of AJR</a>.</p>
		</div>
		
		<div id="about-contact" class="about-section">
			<div class="about-contact-option">Email:</div>
			<div class="about-contact-option">Address:</div>
			<div class="about-contact-option">Phone:</div>
			<div class="about-contact-option">Fax:</div>
			<div class="about-contact-option">Twitter:</div>
		</div>
		
		<div id="about-staff" class="about-section">
			<?php query_posts('cat=32'); ?>
			<?php $i = 1; while (have_posts() && $i <= 10) : the_post(); ?>
				<?php the_post_thumbnail('medium'); ?>
			<?php $i++; endwhile; ?> 
		</div>
	</div>

<?php get_footer(); ?>