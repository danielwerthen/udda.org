<?php
/**
 * Template Name: Formulär | Deppig
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
                <header class="entry-header"><h1 class="entry-title">FÅ EN KUDDIS</h1></header><!-- .entry-header -->
                <div class="entry-content">

                        <?php 

                            if (isset($_POST['f1'])) {


                                $body = "";
                                $body .= "Namn: ".$_POST['f1']." ".$_POST['f2']."\n";
                                $body .= "Ålder: ".$_POST['f3']."\n";
                                $body .= "E-post: ".$_POST['f4']."\n";
                                $body .= "Tel: ".$_POST['f5']."\n";
                                $body .= "Ort: ".$_POST['f6']."\n";
                                $body .= $_POST['f7']."\n";
                                $body .= "Har kontakt med psykolog/kurator: ".$_POST['f8']."\n";
                                $body .= "Kommentar: ".$_POST['f9']."\n";

                                $to      = 'udda@udda.org';
                                $subject = 'Ansökan: Få en kuddis';
                                $headers = 'From: no-reply@udda.org' . "\r\n".'X-Mailer: PHP/' . phpversion();

                                mail($to, $subject, $body, $headers);                                

                                echo "<p>Ditt mail är skickat. Vi återkommer så snabbt vi kan.</p>";

                            } else {

                        ?>

                            <p>ÄR du mellan 18-35 och känner dig nestämd eller tror att du kan lida av en depression så är du mer än välkommen att bli medlem här. Genom att vara medlem har du möjlighet att få en fadder som du kan kontakta, träffa andra i liknande situation samt få hjälp att få tag i rätt person inom psykiatrin och vården.</p>
                            <p>Dessutom anordnar vi aktiviteter som du kan vara delaktig i.</p>

                            <form name="madrs" method="POST">


                                <label>Förnamn</label><input type="text" name="f1" /><br /><br />
                                <label>Efternamn</label><input type="text" name="f2" /><br /><br />
                                <label>Ålder</label><input type="text" name="f3" /><br /><br />
                                <label>E-post</label><input type="text" name="f4" /><br /><br />
                                <label>Telefonnummer</label><input type="text" name="f5" /><br /><br />
                                <label>Bostadsort</label><input type="text" name="f6" /><br /><br />

                                <label>Vill helst prata med</label><br />
                                <select name="f7">
                                    <option value="Vill helst prata med: Tjej/Kille spelar ingen roll">Tjej/Kille spelar ingen roll</option>
                                    <option value="Vill helst prata med: Tjej">Tjej</option>
                                    <option value="Vill helst prata med: Kille">Kille</option>
                                </select>
                                <br /><br />

                                <label>Har kontakt med psykolog/kurator</label><br />
                                <select name="f8">
                                    <option value="Nej">Nej</option>
                                    <option value="Ja">Ja</option>
                                </select>
                                <br /><br />

                                <label>Kommentar</label><textarea name="f9"></textarea> <br /><br />          

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
