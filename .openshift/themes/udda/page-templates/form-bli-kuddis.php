<?php
/**
 * Template Name: Formulär | Bli Kuddis
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<style>

    input[type=text] {
        width:100%;
    }

</style>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">


            <article class="page type-page status-publish hentry">
                <header class="entry-header"><h1 class="entry-title">Bli KUDDIS</h1></header><!-- .entry-header -->
                <div class="entry-content">

                        <?php 

                            if (isset($_POST['f1'])) {

                                $body = "";
                                $body .= "Namn: ".$_POST['f1']." ".$_POST['f2']."\n";
                                $body .= "Ålder: ".$_POST['f3']."\n";
                                $body .= "E-post: ".$_POST['f4']."\n";
                                $body .= "Tel: ".$_POST['f5']."\n";
                                $body .= "Ort: ".$_POST['f6']."\n";
                                $body .= "Erfarenheter av depression: ".$_POST['f7']."\n";
                                $body .= "Varför vill du vara volontär hos oss: ".$_POST['f8']."\n";
                                $body .= "Relevanta erfarenheter: ".$_POST['f9']."\n";

                                $to      = 'medlem@udda.org';
                                $subject = 'Ansökan: Bli en kuddis';
                                $headers = 'From: no-reply@udda.org' . "\r\n".'X-Mailer: PHP/' . phpversion();

                                mail($to, $subject, $body, $headers);                                

                                echo "<p>Tack för ditt intresse vi återkommer så fort vi hunnit gå igenom din ansökan.</p>";

                            } else {

                        ?>

                            <p>Vill du bli volontär och hjälpa oss bygga UDDA som fadder/kuddis till någon som har går igenom det du har erfarenhet av - vi söker både sådana som har vart deprimerade eller liknande problem eller är anhöriga till någon som haft en depression eller dylikt.</p>                            

                            <form name="madrs" method="POST">

                                <label>Förnamn</label><input type="text" name="f1" /><br /><br />
                                <label>Efternamn</label><input type="text" name="f2" /><br /><br />
                                <label>Ålder</label><input type="text" name="f3" /><br /><br />
                                <label>E-post</label><input type="text" name="f4" /><br /><br />
                                <label>Telefonnummer</label><input type="text" name="f5" /><br /><br />
                                <label>Bostadsort</label><input type="text" name="f6" /><br /><br />
                                <label>Erfarenheter av depression eller dylikt</label><textarea name="f7"></textarea> <br /><br />
                                <label>Varför vill du vara volontär hos oss?</label><textarea name="f8"></textarea> <br /><br />
                                <label>Relevanta erfarenheter (t.ex. andra volontär uppdrag)</label><textarea name="f9"></textarea> <br /><br />

                                <input type="submit" value="Skicka in" />

                            </form>

                        <?php } ?>


                </div><!-- .entry-content -->
            </article><!-- #post-## -->            


		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
