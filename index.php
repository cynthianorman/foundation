<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
	
	<div class="hero grid-container full">
		<div class="grid-x">
    		<div class="cell hero-text">
		      <h1>Welcome to WPSlingers Academy!</h1>
		      <h3>Learning WordPress the Smart Way</h3>
		      <h4>Why don&rsquo;t you check out the <strong>courses</strong> you&rsquo;re interested in?</h4>
		      <a href="#" class="button large primary">Browse Courses</a>
		    </div>
	  	</div>
	</div>

  	<div class="front-page grid-container">
  		<div class="grid-x">
	  		<div class="cell large-6">
		  		<h2>Upcoming Events</h2>
		        <div>
		            <span>Mar</span>
		            <span>25</span>  
		          <div>
		            <h5>WordCamp</h5>
		            <p>Why you should attend WordCamp. <a href="#" class="button medium hollow">Learn more</a></p>
		          </div>
		        </div>
		        <p><a href="#" class="button large primary">View All Events</a></p>
			</div>

	  		<div class="cell large-6">
	  			<h2>From our Blog</h2>
		        <div>
		            <span>Jan</span>
		            <span>20</span>  
		          <div>
		            <h5>We Were Voted Best School</h5>
		            <p>For the 10th year in a row we are voted #1. <a href="#" class="button medium hollow">Read more</a></p>
		          </div>
		        </div>		        
		        <p><a href="#" class="button large primary">View All Blog Posts</a></p>
	  		</div>
		</div>
    </div> <!-- end of body container -->

<?php get_footer(); ?>