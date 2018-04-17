<?php
/*
Template Name: evenements
*/
?>

<?php get_header(); ?>

<div id="fullpage">

  <div class="section" data-anchor="section1">

    <div class="svg">



    </div>

    <div class="circle_evenement">

      <a href="#section1">

        <div class="circle_page_evenement circle_active">

        </div>

      </a>

      <a href="#section2">

        <div class="circle_page_evenement">

        </div>

      </a>

    </div>

    <div class="flex-row d-flex evenement_row">

        <div class="col-sm-6">

          <div class="evenement_wrapper">

              <div class="evenement_title">

                <?php the_field('evenement_title_1'); ?>

              </div>

              <div class="evenement_content">

                <div class="evenement_content_text">

                  <?php the_field('evenement_content_1'); ?>

                </div>

                <div class="evenement_content_link">

                  Lien de l'évènement

                </div>

            </div>

          </div>

        </div>

        <div class="col-sm-6">

          <div class="evenement_wrapper">

              <div class="evenement_title">

                <?php the_field('evenement_title_1'); ?>

              </div>

              <div class="evenement_content">

                <div class="evenement_content_text">

                  <?php the_field('evenement_content_1'); ?>

                </div>

                <div class="evenement_content_link">

                  Lien de l'évènement

                </div>

            </div>

          </div>

        </div>



    </div>



  </div>

  <!-- Deuxième page  -->

  <div class="section" data-anchor="section2">

    <div class="circle_evenement">

      <a href="#section1">

        <div class="circle_page_evenement ">

        </div>

      </a>

      <a href="#section2">

        <div class="circle_page_evenement circle_active">

        </div>

      </a>

    </div>


    <div class="flex-row d-flex evenement_row">

        <div class="col-sm-6">

          <div class="evenement_wrapper">

              <div class="evenement_title">

                <?php the_field('evenement_title_1'); ?>

              </div>

              <div class="evenement_content">

                <div class="evenement_content_text">

                  <?php the_field('evenement_content_1'); ?>

                </div>

                <div class="evenement_content_link">

                  Lien de l'évènement

                </div>

            </div>

          </div>

        </div>

        <div class="col-sm-6">

          <div class="evenement_wrapper">

              <div class="evenement_title">

                <?php the_field('evenement_title_1'); ?>

              </div>

              <div class="evenement_content">

                <div class="evenement_content_text">

                  <?php the_field('evenement_content_1'); ?>

                </div>

                <div class="evenement_content_link">

                  Lien de l'évènement

                </div>

            </div>

          </div>

        </div>

    </div>

  </div>

</div>

<?php get_footer(); ?>
