<!-- Start About Area -->
  <section class="about-socity pt-100 pb-100 wow bounceInUp" data-wow-duration="3s">
      <div class="container">
          <div class="row">
              <div class="col-md-7">
                  <h2 class="socity-title pb-50" id="about-team-title">
                      <?php echo esc_html(get_theme_mod('about-team-title','People here are just extraordinary and leading the society and era to the most success.'))?>
                  </h2>
              </div>
          </div>
      </div>
      <div class="team-members">
          <div class="socity-pics bg-dark">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="socity-people d-flex justify-content-center align-items-end">
                              <?php
                              $args = array(
                                  'post_type' => 'members',
                                  'post_per_page' =>5,
                                  'post_status' => 'publish',
                              );
                              $id = get_the_ID();
                              $members = new WP_Query( $args );
                              if ( $members->have_posts() ):
                                  while ( $members->have_posts() ):
                                      $members->the_post();
                              ?>
                              <div class="member-imgs" id="img-<?php echo esc_attr($id);?>">
                                  <?php the_post_thumbnail() ;?>
                              </div>
                              <script>
                                    function showMemeber(){
                                      document.querySelector('.showpost-<?php echo get_the_ID();?>').classList.add('showmember');
                                  }
                                  var teammember = document.querySelector('#img-<?php echo esc_attr($id);?>');
                                       teammember.addEventListener('click',showMemeber);
                              </script>
                              <?php
                              endwhile;
                              wp_reset_postdata( );
                          endif;
                          ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <?php
              $args = array(
                  'post_type' => 'members',
                  'post_per_page' =>5,
                  'post_status' => 'publish',
              );
              $member_info = new WP_Query( $args );
              if ( $member_info->have_posts() ):
                  while ( $member_info->have_posts() ):
                      $member_info->the_post();
              ?>
              <div class="socity-member bg-dark showpost-<?php echo get_the_ID();?>">
                  <div class="container">
                      <div class="row d-flex align-items-center">     
                          <div class="col-md-6 col-sm-12 member-img d-flex align-items-end justify-content-center">
                              <img src="<?php the_post_thumbnail_url( ) ;?>">
                          </div>
                          <div class="col-md-6 col-sm-12">
                              <div class="member-intro">
                                 <?php the_content();?>
                              </div>
                              <div class="memberinfo d-flex">
                                  <h3 class="member-name"><?php echo esc_html( get_field('member_name') )?></h3>
                                  <h4 class="member-designetion">|&nbsp;&nbsp;&nbsp;&nbsp;<?php echo esc_html( get_field('member_designation') )?></h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <script>
                    function removeMemeber(){
                          document.querySelector('.showpost-<?php echo get_the_ID();?>').classList.remove('showmember');
                      }
                      var hiddenteammember = document.querySelector('.showpost-<?php echo get_the_ID();?>');
                      hiddenteammember.addEventListener('click',removeMemeber);
              </script>
              <?php
                  endwhile;
                  wp_reset_postdata( );
                  endif;
              ?>
      </div>
  </section>
