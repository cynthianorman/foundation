<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
			
	<div class="content">
	
		<div class="hero">
			<div class="grid-x">
	    		<div class="cell hero-text">
			      <h1>Welcome!</h1>
			      <h2>We think you&rsquo;ll like it here.</h2>
			      <h3>Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
			      <a href="#" class="button large primary">Find Your Major</a>
			    </div>
		  	</div>
		</div>

	  	<div class="grid-container">
	  		<div class="grid-x">
		  		<div class="cell medium-6 large-8">
			  		<h2>Upcoming Events</h2>
			        <div class="event-summary">
			          <a class="event-summary__date t-center" href="#">
			            <span class="event-summary__month">Mar</span>
			            <span class="event-summary__day">25</span>  
			          </a>
			          <div class="event-summary__content">
			            <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
			            <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
			          </div>
			        </div>
			        <div class="event-summary">
			          <a class="event-summary__date t-center" href="#">
			            <span class="event-summary__month">Apr</span>
			            <span class="event-summary__day">02</span>  
			          </a>
			          <div class="event-summary__content">
			            <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
			            <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
			          </div>
			        </div>
			        <p class="t-center no-margin"><a href="#" class="btn btn--pink">View All Events</a></p>
				</div>

		  		<div class="cell medium-6 large-4">
		  			<h2>From our Blog</h2>
			        <div class="event-summary">
			          <a class="event-summary__date event-summary__date--beige t-center" href="#">
			            <span class="event-summary__month">Jan</span>
			            <span class="event-summary__day">20</span>  
			          </a>
			          <div class="event-summary__content">
			            <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best School</a></h5>
			            <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
			          </div>
			        </div>
			        <div class="event-summary">
			          <a class="event-summary__date event-summary__date--beige t-center" href="#">
			            <span class="event-summary__month">Feb</span>
			            <span class="event-summary__day">04</span>  
			          </a>
			          <div class="event-summary__content">
			            <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
			            <p>Two of our processors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
			          </div>
			        </div>
			        
			        <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
		  		</div>
			</div>

	    </div> <!-- end of container -->																					

	</div> <!-- end #content -->

<?php get_footer(); ?>