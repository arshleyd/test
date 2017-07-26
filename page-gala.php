<?php
/**
 * Template Name: Gala
 * *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package horizon-p1
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php include 'partials/page-header.php'; ?>

            <section class="section section--padding bg-fingerprint bg-fingerprint--right">
                <div class="container container--slim text-center">
                    <div class="responsive-embed">
											 	<!-- Might need style="height: 76%;" for unique aspect ratio -->
                        <iframe src="https://player.vimeo.com/video/221367846?title=0&byline=0&portrait=0" frameborder="0"></iframe>
                    </div>

										<p class="p--lead">
											Hear more of Julie’s story and experience some of her world at Horizon’s annual Gala.
										<p>

										<h2>December 1st, 2017</h2>
                </div>
            </section>

						<!-- Sponsorships -->
						<div class="layout--half">
                <section class="half__left section section--padding-md">
                    <div class="half__container">
												<h2>Event Details</h2>
												<p>Nothing compares to the welcome you receive when walking into a Micro Community - children singing, dancing, smiling, banging on drums… Our virtual reality experience will immerse you in the Kenya Micro Community, complete with your very own passport.</p>
												<p>Enjoy a lively evening of cocktails, dinner, interactive stations, and a live auction. With the help of the Horizon family, all donations raised on December 1st will go towards helping children like Julie pursue their dreams.</p>
												<p><a href="https://www.facebook.com/HorizonEmpowers/" target="_blank" title="Open Horizon Facebook in new tab">Follow our Facebook page</a> for a sneak peak at auction items before the&nbsp;event!</p>

                    </div>
                </section>
                <section class="half__right section section--padding-md">
                    <div class="half__container">
											<h2>Grab Your Passport</h2>
											<p class="lead">December 1, 2017 at 6PM<br />
											Lancaster Marriott at Penn Square, Lancaster, PA<br />
											$75/ticket or $125/couple</p>

											<p>
												<a href="#" class="button button--primary button--lg">RSVP</a>
											</p>

											<!-- <h4>Can’t make it, but want to contribute?</h4>
											<a href="#" class="button button--primary">Make A Donation</a> -->
											<p>
												Can’t make it, but want to contribute?<br />
												<a href="#" target="_blank"><strong>Make A Donation</strong></a>
											</p>
                    </div>
                </section>
            </div>

        </main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
