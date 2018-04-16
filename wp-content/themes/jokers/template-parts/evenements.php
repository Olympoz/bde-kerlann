<?php
/*
Template Name: evenements
*/
?>

<?php get_header(); ?>

<div id="fullpage">

  <div class="section">

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

                <?php the_field('evenement_title_2'); ?>

              </div>

              <div class="evenement_content">

                <div class="evenement_content_text">

                  <?php the_field('evenement_content_2'); ?>

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

  <div class="section">

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

                <?php the_field('evenement_title_2'); ?>

              </div>

              <div class="evenement_content">

                <div class="evenement_content_text">

                  <?php the_field('evenement_content_2'); ?>

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
