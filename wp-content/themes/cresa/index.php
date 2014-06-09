<?php
/**
 * @package WordPress
 * @subpackage Cresa
 * Template Name:  Front Page
 */

get_header(); ?>
    		
<!--THE WORDPRESS LOOP (in a very basic format)-->


<div id="content">
                <div id="intro">
                                   <h2 class="left"><em>Always Here, Always Ready</em></h2>
                    <p><strong>Clark Regional Emergency Services Agency (CRESA)</strong> provides 9-1-1 dispatch, technology services, and emergency management services for Clark County, Washington. We serve Battle Ground, Camas, La Center, Ridgefield, Vancouver, Washougal, Yacolt, and unincorporated areas of the county.</p>
                </div> <!-- end intro -->

                <aside id="aside">
                    <h2>Did You Know</h2>
                    <p>You can sign up to receive emergency alerts by phone and email.</p>
                    <a href="alerts.html" class="button">Sign Up</a>

                </aside>
                <div class="clear">
                </div><!-- end clear -->
                <div class="container">
                    <div class="row circles">
                        <div class="col-md-4">
                            <a  class="fpb" href="records.html" title="records request form"><img src="<?php bloginfo('stylesheet_directory') ?>/images/records.png" alt="records"></a>
                            <h2>Request Records</h2>
                            <p>Would you like to request 9-1-1 records? We can help you! Please fill out the <a href="records.html" title="records request form">public records request form.</a></p>
                        </div><!-- end record -->
                        <div class="col-md-4">
                            <a class="fpb" href="when911.html" title="When to call 911"><img src="<?php bloginfo('stylesheet_directory') ?>/images/question.png" alt="question mark" ></a>
                            <h2>When to Call 9-1-1</h2>
                            <p>and when not to! It is important to know when you should or should not call. <a href="when911.html" title="When to call 911">Learn more...</a></p>
                        </div><!-- end when911 -->
                        <div class="col-md-4">
                            <a class="fpb" href="em.html" title="emergency management"><img src="<?php bloginfo('stylesheet_directory') ?>/images/star2.png" alt="star" ></a>
                            <h2>Prepare, Be Ready</h2>
                            <p>and get involved! Learn how to be prepared for an emergency. <a href="em.html" title="emergency management">Learn more...</a></p>
                        </div><!-- end prepared -->
                    </div>
                </div>
            <!-- <div class="line"> -->
            </div>
    	
<?php //get_sidebar(); ?>
    		
<?php get_footer(); ?>
