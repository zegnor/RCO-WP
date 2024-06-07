<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package repairCafeOdense
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

                    
                    <section id="landing_page">
                        <div id="main-title"></div>
                        
                        <div class="container-fluid lp_frame">
                            
                                <?php get_sidebar('topleft'); ?>
                                <?php get_sidebar('topright'); ?>
                            
                        </div>
                    </section>
                    
                    
                    <section id="about-locate" class="about-page section-page">
                        
                        <article class="page-container page-container-content">
                            
                            <div class="page-content-white" align="center">
                                <h2>Who are we?</h2>
                                
                                
                                <h5 id="about-headline">Global:</h5>
                                <p class="p-black p-about p-global">
                                    Repair Cafés are free meeting places and they’re all about repairing things (together). 
                                    In the place where a Repair Café is located, you’ll find tools and materials to help 
                                    you make any repairs you need. On clothes, furniture, electrical appliances, bicycles, 
                                    crockery, appliances, toys, et cetera. You’ll also find expert volunteers, with repair 
                                    skills in all kinds of fields.
                                    Visitors bring their broken items from home. Together with the specialists they start 
                                    making their repairs in the Repair Café. It’s an ongoing learning process. If you have 
                                    nothing to repair, you can enjoy a cup of tea or coffee. Or you can lend a hand with 
                                    someone else’s repair job. You can also get inspired at the reading table – by leafing 
                                    through books on repairs and DIY. <br><br>
                                    There are over 1.400 Repair Cafés worldwide. Visit one in your area or start one yourself! 
                                    See also the house rules we use at the Repair Café.
                                </p>
                                
                                <p class="p-black p-about p-local about-disable">
                                    Repair Cafe Odense are located in the 3rd largest city of Denmark, on the island of Fyn. 
                                    In our first year open we managed to repair 230 items. This gave us a success rate of 84%.
                                    Among the items repaired we an almost equal amount of bicycles, electronics and clothing repaired.
                                    This done over the course of 11 events and best of all: we helped 195 people.
                                </p>
                                
                                <div class="about-button-container">
                                    <button id="global-button-click">Check Local Info</button>
                                </div>
                                
                            </div>
                            
                        </article>
                        <article class="page-container"></article>
                        
                    </section>
                    
                    
                    <section id="instagram-section-page" class="instagram-page section-page">
                        
                        <article class="page-container-black" align="center">
                                <h2>Instagram</h2>
                                
                                <div class="instagram-container-content-box">
                                    
                                    <?php get_sidebar("instagram"); ?>
                                    
                                </div>
                                
                            </article>
                        
                    </section>
                    
                    
                    <section id="rules-page-id" class="rules-page section-page">

                        <article class="page-container"></article>
                        <article class="page-container page-container-content">

                            <div id="rules-locate" class="page-content-white" align="center">

                                <h2>Our rules</h2>

                                <ul class="rules-list-ul">
                                    <li class="rules-list-li"><p class="p-black p-rules">The activities in the Repair Café are performed free of charge and on a voluntary basis by the existing repair experts.</p></li>

                                    <li class="rules-list-li"><p class="p-black p-rules">Repairs are carried out as much as possible by the visitors themselves, if necessary with the help of the repair experts.</p></li>

                                    <li class="rules-list-li"><p class="p-black p-rules">Neither the Repair Café organizers nor the repairers are liable for damage as a result of provided repair advice or instructions, 
                                            for damage to the objects offered for repair, for consequential damage or for other damage resulting from activities in the Repair Café.</p></li>

                                    <li class="rules-list-li"><p class="p-black p-rules">A voluntary contribution is highly appreciated.</p></li>

                                    <li class="rules-list-li"><p class="p-black p-rules">For the use of new materials such as cords, plugs, fuses, ready-made knees or applications must be paid separately.
                                        </p></li>

                                    <li class="rules-list-li"><p class="p-black p-rules">Visitors who offer broken items for repair do so at their own risk.</p></li>

                                    <li class="rules-list-li"><p class="p-black p-rules">The repairers do not guarantee the repairs carried out with their help and are not liable if objects that have been repaired in 
                                            the Repair Café do not function at home.</p></li>

                                    <li class="rules-list-li"><p class="p-black p-rules">The repairers reserve the right not to repair certain objects.
                                        </p></li>

                                    <li class="rules-list-li"><p class="p-black p-rules">The repairers are not obliged to reassemble disassembled devices that can not be repaired.
                                        </p></li>

                                    <li class="rules-list-li"><p class="p-black p-rules">The visitors of the Repair Café are responsible for the neat removal of broken objects that could not be repaired.
                                        </p></li>
                                    <li class="rules-list-li"><p class="p-black p-rules">In order to avoid long waiting times, a maximum of one broken object per person will be watched. For a following object, the visitor joins the back of the queue.</p></li>
                                </ul>

                            </div>

                        </article>
                        
                    </section>
                    
                    
                    <section id="staff-locate" class="staff-page section-page">
                        
                        <article class="page-container-black" align="center">
                                <h2>Meet the core staff</h2>
                               <?php get_sidebar('staff'); ?>
                                
                            </article>
                        
                    </section>
                    
                    
                    <section id="event-locate" class="event-page section-page">
                        
                        <article class="page-container page-container-content">
                            
                            <div class="page-content-white" align="center">
                                <h2>Events</h2>
                                
                                <?php get_sidebar("facebook") ?>
                                <a class="map-link facebook-link-mobile" href="https://www.facebook.com/repaircafeodense/">Click to see events</a>
                                
                            </div>
                            
                        </article>
                        <article class="page-container"></article>
                        
                    </section>
                    
                    
                    <section id="donation-locate" class="donation-page section-page">
                        
                        <article class="page-container-black" align="center">
                                <h2>Donation</h2>
                                
                                <div class="donation-container">
                                    
                                    <div class="col-md-6 donation-bootstrap-container-left">
                                        <h3>How to donate</h3>
                                        <p class="p-white">
                                            You can donate via mobilepay <br>
                                            to this number provided below.<br>
                                            We sincerely thank you!
                                        </p>
                                        <h6> 68792</h6>
                                    </div>
                                    
                                    <div class="col-md-6 donation-bootstrap-container-right">
                                        <h3>Why Donate?</h3>
                                        
                                        <div class="donation-right-side">
                                        <div class="donation-why">
                                        <p class="why-donate-p p-white">
                                            While repairing is cheaper than
                                            throwing stuff out, it is not free.
                                            In order to keep us working
                                            hard helping the community
                                            with reparations, we need
                                            supplies, tools and energy. Your
                                            kindness can go a long way to
                                            ensure we can keep your things
                                            working for a long time. 
                                        </p>
                                        </div>
                                        
                                        <div class="donation-why">
                                            <img class="donation-image" src="http://localhost/wp-content/uploads/2018/04/donation_cartoon.png" alt="donation chart">
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>
                                
                            </article>
                        
                    </section>
                    
                    
                    <section id="contact-locate" class="contact-page section-page">
                        
                        <article class="page-container page-container-contact-main">
                            <div class="page-container-contact"></div>
                        </article>
                        
                        <article class="page-container page-container-content">
                            
                            <div class="page-content-white" align="center">
                                <h2>Contact us</h2>
                                <div class="col-md-6 contact-container">
                                    
                                    <div class="contact-row">
                                    <h5>Address:</h5><h6> Odense harbor</h6>
                                    </div>
                                    
                                    <div class="contact-row">
                                    <h5>Phone:</h5><h6> +45 00 00 00 00</h6>
                                    </div>
                                    
                                    <div class="contact-row">
                                    <h5>Mail:</h5><h6> dominika@repaircafeodense.org</h6>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 contact-container">
                                    
                                    <h5>Find us at:</h5>
                                    <?php get_sidebar(); ?>
                                    
                                </div>
                            </div>
                            
                        </article>
                        
                    </section>

                    
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
