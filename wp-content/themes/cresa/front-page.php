<?php
/**
 * @package WordPress
 * @subpackage Cresa
 * Template Name: Front Page
 */

get_header(); ?>
    		
<div id="content">
                <div id="intro">
                                   <h2 class="left"><em>Always Here, Always Ready</em></h2>
                    <p><strong>Clark Regional Emergency Services Agency (CRESA)</strong> provides 9-1-1 dispatch, technology services, and emergency management services for Clark County, Washington. We serve Battle Ground, Camas, La Center, Ridgefield, Vancouver, Washougal, Yacolt, and unincorporated areas of the county.</p>
                </div> <!-- end intro -->

                <aside id="aside">
                		<?php dynamic_sidebar('cta_home'); ?>
                </aside>
                <div class="clear">
                </div><!-- end clear -->
                <div class="container">
                    <div class="row circles">
                        <div class="col-md-4">
                                <?php dynamic_sidebar('left_home'); ?>
                     </div><!-- end record -->
                        <div class="col-md-4">
                                <?php dynamic_sidebar('center_home'); ?>
                        </div><!-- end when911 -->
                        <div class="col-md-4">
                               <?php dynamic_sidebar('right_home'); ?> 
                        </div><!-- end prepared -->
                    </div>
                </div>
            <!-- <div class="line"> -->
            </div>


    	
<?php //get_sidebar(); ?>
    		
<?php get_footer(); ?>
