<?php
/*
Template Name: Full Stack Development (Part-time)
Template Post Type: course
*/
get_header(); 
$args = wpas_get_view_data();
$hasFinancing = !empty($args['current-location']['prices']['financed']);
?>
    <header class="masthead">
      <div class="header-content">
        <div class="row heading-row mb-5">
          <div class="col-sm-10 mx-auto text-center">
            <h3 class="text-white mb-0"><span class="d-none d-sm-inline"><?php pll_e('It takes just'); ?></span> 16 <?php pll_e('weeks (part-time) in'); ?>
              <div class="dropdown cities dropdown-selector ml-2 mr-2">
                <button class="dropdown-toggle bg-white" type="button" id="pricing-cities" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span><?php echo $args['current-location']['post_title']; ?></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="pricing-cities">
                  <?php foreach($args['locations'] as $l){ ?>
                  <a class="dropdown-item location-option" href="<?php echo get_permalink($args['course']['ID']); ?><?php echo $l['post_name']; ?>" data-value="<?php echo $l['bc_location_slug']; ?>">
                    <?php echo $l['post_title']; ?>
                    <?php wpas_get_inline_svg('assets/icons/flags/inline',$l['flag'].'.svg'); ?>
                  </a>
                  <?php } ?>
                </div>
              </div>
             <?php pll_e('to become a'); ?></h3>
            <h1 class="text-white mb-0"><?php pll_e('Full-Stack Software Developer'); ?></h1>
            <div id="flip">
              <div><div><?php pll_e('and increase your income significantly'); ?></div></div>
              <div><div><?php pll_e('and join the workforce of the future'); ?></div></div>
              <div><div><?php pll_e('and re-launch your career'); ?></div></div>
              <div><div><?php pll_e('or build your own Tech Startup'); ?></div></div>
            </div>
            <div class="mt-3 mt-sm-0">
              <a href="<?php echo get_permalink( get_page_by_path( wpas_pll_get_slug('apply') ) ); ?>" class='btn btn-lg btn-danger mr-3'><?php pll_e('Apply Now'); ?></a>
              <a href="#syllabusModal"  data-toggle="modal" data-target="#syllabusModal" class='btn btn-lg btn-secondary'><?php pll_e('Request Syllabus'); ?></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-10 mx-auto text-left text-black">
          </div>
        </div>
      </div>
    </header>
    <div class="container d-none d-sm-block badges mt-5 mb-5 text-white text-center">
      <h5><?php pll_e('The number one part-time school in the US'); ?></h5>
      <div class="card-deck">
        <div class="card">
          <a target="_black" rel="nofollow" href="https://www.switchup.org/bootcamps/4geeks-academy"><?php wpas_get_inline_svg('assets/icons/badges/inline','black1.1.svg'); ?></a>
        </div>
        <div class="card">
          <a target="_black" rel="nofollow" href="https://www.newsweek.com/insights/coding-career-and-you-top-coding-schools-2017/4geeks-academy"><?php wpas_get_inline_svg('assets/icons/badges/inline','black1.2.svg'); ?></a>
        </div>
        <div class="card d-none d-lg-block">
          <?php wpas_get_inline_svg('assets/icons/badges/inline','black1.3.svg'); ?>
        </div>
        <div class="card">
          <?php wpas_get_inline_svg('assets/icons/badges/inline','black1.4.svg'); ?>
        </div>
      </div>
    </div>
    <!--
      -->
    <section class="bg-light text-black text-left">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-lg-2 ml-auto">
            <ul data-toggle="sticky-onscroll" class="nav flex-column program-menu">
              <li class="nav-item active">
                <a class="nav-link" href="#program-details"><?php pll_e('Program details'); ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#course-modules"><?php pll_e('Course Modules'); ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#instructors"><?php pll_e('Mentors'); ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skills"><?php pll_e('Skills'); ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#technologies"><?php pll_e('Technologies'); ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing"><?php pll_e('Price & Financing'); ?></a>
              </li>
              <li class="nav-item">
                <a href="<?php echo get_permalink( get_page_by_path( wpas_pll_get_slug('apply') ) ); ?>" class='btn btn-danger'><?php pll_e('Apply Now'); ?></a>
              </li>
            </ul>
          </div>
          <div id="program-details" class="col-md-9 ml-auto">
            <h2 class="section-heading text-black mb-2"><?php pll_e('A Premium Program designed to'); ?><br /> <?php pll_e('launch your web developer career'); ?></h2>
            <h5 class="mb-4">
              <span class="text-orange">[ </span><span class="text-blue"><?php pll_e('300+ hrs of lessons, 3 times a week during 16 weeks'); ?>.</span> <span class="text-orange">]</span>
            </h5>
            <div class="row">
              <div class='col-sm-8 mb-3'>
                <h4><?php pll_e('Really senior mentoring'); ?></h4>
                <?php pll_e('All of our staff has 10+ years coding and holds senior possitions in Miami\'s tech industry'); ?>.
              </div>
              <div class='col-sm-8 mb-3'>
                <h4><?php pll_e('Top notch technology stack'); ?></h4>
                <?php pll_e('Coding is changing a lot RIGHT NOW, learn the newest and most needed languages and frameworks in the market. Your potencial employeers will love it'); ?>.
              </div>
              <div class='col-sm-8 mb-3'>
                <h4><?php pll_e('Really Part-time'); ?></h4>
                <?php pll_e('It is not about teaching on after-hours, it requires much more! This course is meant for employed professionals, we have designed the perfect method for flexible and blended learning'); ?>.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- STEPS -->
    <section id="course-modules" class="steps-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ml-auto">
            <h2 class="steps-header text-center"><?php pll_e('Course Structure'); ?></h2>
            <div class="steps-timeline steps4">
              <div class="steps">
                <div class="steps-img"></div>
                <h3 class="steps-name"><?php pll_e('Prework'); ?></h3>
                <div class="steps-description">
                  <h5><?php pll_e('Duration: 2 wks'); ?></h5>
                  <?php pll_e('Starting with the basics: HTML5 + CSS3 + Javascript. We review the basics of coding and make sure we are all on the same page'); ?>.
                  <h5><?php pll_e('Possible projects'); ?></h5>
                  <?php pll_e('CSS Postcard, Minimal Instagram Version, etc.'); ?>
                </div>
              </div>
              <div class="steps">
                <div class="steps-img"></div>
                <h3 class="steps-name"><?php pll_e('Learn To Code'); ?></h3>
                <div class="steps-description">
                  <h5><?php pll_e('Duration: 2 wks'); ?></h5>
                  <?php pll_e('Think like a computer: Control the flow of your code, code algorithms, loop, use conditionals, webpack, the command line, SASS transpile, GIT, etc'); ?>.
                  <h5><?php pll_e('Possible projects'); ?></h5>
                  <?php pll_e('Instagram Application, Memory Card Game, Tic Tac Toe, Flapy Bird, etc.'); ?>
                </div>
              </div>
              <div class="steps">
                <div class="steps-img"></div>
                <h3 class="steps-name"><?php pll_e('Junior Applications'); ?></h3>
                <div class="steps-description">
                   <h5><?php pll_e('Duration: 6 wks'); ?></h5>
                   <?php pll_e('Create your first ReactJS application, MVC Pattern, JS Modules, Bundling, BabelJS, The DOM, Events, AJAX'); ?>.
                  <h5><?php pll_e('Possible projects'); ?></h5>
                   <?php pll_e('Coursera Clone, AirBNB Clone, Instagram Clone, YouTube Clone, etc'); ?>.
                </div>
              </div>
              <div class="steps">
                <div class="steps-img"></div>
                <h3 class="steps-name"><?php pll_e('Advanced Applications'); ?></h3>
                <div class="steps-description">
                  <h5><?php pll_e('Duration: 6 wks'); ?></h5>
                  <?php pll_e('Python, Django, REST API\'s, Databases, MongoDB, MVC Pattern, Publishing your webiste, etc.'); ?>
                  <h5><?php pll_e('Possible projects'); ?></h5>
                  <?php pll_e('During this phase you will have to design, code, test and publish your own entire web application'); ?>.
                </div>
              </div>
            </div>
          </div><!-- /.steps-timeline -->
        </div><!-- /.steps-timeline -->
      </div><!-- /.steps-timeline -->
    </section>
    <section class="bg-yellow text-black">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ml-auto call-to-action mb-0">
              <?php get_template_part( 'partials/common', 'syllabus-download' ); ?>
          </div>
        </div>
      </div>
    </section>
    <section id="instructors" class="bg-light text-black text-left instructors">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ml-auto">
            <h2 class="section-heading text-black mb-3"><?php pll_e('Receive training from Senior-only mentors'); ?></h2>
            <div class="row">
              <div class='col-sm-12 col-md-10 mb-3'>
                <p>
                  <?php pll_e('Meet our team of highly trained developers, that currenlty hold senior positions in Miami\'s top tech industry companies'); ?>.
                </p>
              </div>
            </div>
            <div class="row">
                <?php foreach($args['members'] as $memb){ ?>
                <div class='col-sm-4'>
                  <div class="card">
                    <div class="card-img-top" style="background-image: url('<?php echo $memb['teacher_thumb']['url'];  ?>'); height: 200px; width: 100%; display: block;"></div>
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $memb['full_name'];  ?></h4>
                      <p class="card-text"><?php echo $memb['post_content'];  ?></p>
                    </div>
                  </div>
                </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light text-black text-left skills">
      <div class="container">
        <div id="skills" class="row">
          <div class="col-md-9 ml-auto">
            <h2 class="section-heading text-black mb-3"><?php pll_e('Skills: Be prepared for the next decade'); ?></h2>
            <div class="row">
              <div class='col-sm-8 mb-3'>
                <h5>
                  <?php pll_e('Develop the skills senior developers need to be successfull like the following'); ?>.
                </h5>
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="media">
                      <div class="media-left">
                        <?php wpas_get_inline_svg('assets/icons/inline','webarchitect.svg'); ?>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading"><?php pll_e(''); ?>Web Architect</h5>
                        <?php pll_e('When people search for Senior Developers they are really looking for Web Architects: Understand HTTP properly, AJAX, APIs, POST, GET, HTTPS, Client vs Server, etc'); ?>.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="media-left">
                        <?php wpas_get_inline_svg('assets/icons/inline','dynamicwebsites.svg'); ?>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading"><?php pll_e('Dynamic Websties'); ?></h5>
                        <?php pll_e('HTML5 and CSS are only the top of the iceberg, todays websites use JS, React, Webpack, Python, django, Mongo and hundreds of technologies'); ?>.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="media-left">
                        <?php wpas_get_inline_svg('assets/icons/inline','datamaster.svg'); ?>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading"><?php pll_e('Data Master'); ?></h5>
                        <?php pll_e('There is more data and information every day, being able to manipulate that data its mandatory to create today\'s products.'); ?>.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="media-left">
                        <?php wpas_get_inline_svg('assets/icons/inline','logicalthinking.svg'); ?>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading"><?php pll_e('Logical Thinker'); ?></h5>
                        <?php pll_e('Think like a computer and create top-quality algorithms: Loops, conditionals, functions, variables, etc'); ?>.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="media-left">
                        <?php wpas_get_inline_svg('assets/icons/inline','research.svg'); ?>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading"><?php pll_e('Search and Research'); ?></h5>
                        <?php pll_e('Most of the specs are poor and lack details. Sometimes the best developers are those that find examples faster than anyone. Learning to search key to success!'); ?>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <span id="bar-breakpoint"></span>
        <div id="technologies" class="row">
          <div class="col-md-9 ml-auto">
            <h2 class="section-heading text-black mb-3"><?php pll_e('Technologies: Current and future most needed technolgies'); ?>.</h2>
            <div class="row">
              <div class='col-sm-8 mb-3'>
                <h5>
                  <?php pll_e('Be proud, our graduates are capable of building incredible things in the most modern technologies.'); ?>
                </h5>
                <div class="tech-icons">
                  <em class="techico icon-js"></em>
                  <em class="techico icon-python"></em>
                  <em class="techico icon-react"></em>
                  <em class="techico icon-git-squared"></em>
                  <em class="techico icon-database"></em>
                  <em class="techico icon-mongodb"></em>
                  <em class="techico icon-babel"></em>
                  <em class="techico icon-sass"></em>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- PRICING -->
    <section id="pricing" class="pricing-calculator bg-white text-black pt-md-5 pb-5">
      <?php include(locate_template('partials/common-pricing.php')); ?>
    </section>
    
    <?php include(locate_template('partials/common-testimonials.php')); ?>
  <?php get_footer(); ?>