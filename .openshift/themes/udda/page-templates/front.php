<?php
/**
 * Template Name: FrontPage
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<style>

    .featured-content {
        padding-left: 0px;
    }

    .site-main .widecolumn {
        margin-left: 0px;
        
    }

    .site-content {
        margin-left: 0px;
    }

    .site:before {
        width: 0;
    }

    #secondary {
        width: 0;
    }

</style>

<div id="main-content" class="main-content">
    <div id="primary" class="content-area">
        <div id="front-main">
            
            <div id="front-main-content">
                <h1 id="front-title">UNG DEPRESSION OCH DESS ANHÖRIGA</h1>                
                <img id="front-img" src="<?php echo get_template_directory_uri(); ?>/images/front-img.jpg"/>
                <p>Att få en depression är lika vanligt som att ha Facebook. Ändå är det tabu att prata om. Har man haft en depression eller är mitt uppe i en känner man sig ofta som världens mest ensamma människa och det är inget man vill eller vågar pratar om.</p>
                <p>Vi är här för att bryta det tabut och vara den plats dit du kan vända. UDDA finns till för att du ska veta att du inte är ensam. Genom träffar på nätet och i verkliga livet vill vi bilda en plattform där du möter andra som går igenom samma sak, eller har gått igenom liknande. Och vi är många.</p>
            </div>
            
                <div class="row">

                    <div id="box1" class="front-box-content">
                        <h2 style="display:inline-block;margin-top:20px;">Få en fadder</h2>
                        <img id="kuddis" style="float:right; max-width:300px; margin-top:20px;padding:20px;width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/kuddis.png" />
                        <p>Vi vet att det kan kännas att ingenting kommer hjälpa ibland. Det som gör ont kommer fortsätta att göra ont. Men det behöver inte göra lika ont som det gör i dig just nu. Depression är inget konstigt. Har du funderingar kring depression eller känner du någon annan som mår dåligt och behöver stöd, <a href="/medlem/jag-mar-daligt/">KLICKA HÄR.</a></p>
                    </div>

                    <div id="box2" class="front-box-content">

                        <?php $args = array(
                            'numberposts' => 1,
                            'offset' => 0,
                            'category' => 0,
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'suppress_filters' => true );

                            $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
                        ?>

                        <?php if ($recent_posts) { ?>
                            <?php if (has_post_thumbnail($recent_posts[0]['ID'])) { ?> 
                                <div id="front-prev-img"><?php echo get_the_post_thumbnail($recent_posts[0]['ID'],  array(244,162)); ?></div>
                            <?php } else { ?>
                                <div id="front-prev-img"><img src="<?php echo get_template_directory_uri(); ?>/images/blank_prev.png" /></div>
                            <?php } ?>
                            <h4 style="margin-top:10px;"><?php echo $recent_posts[0]['post_title']; ?></h4>
                            <a href="<?php echo $recent_posts[0]['guid']; ?>">Till inlägget...</a>
                        <?php } ?>
                    </div>
                </div>

                <div class="row">

                    <div id="box4" class="small-box">
                        <b>Aktuellt</b>
                        <hr />

                        <?php
                            $catquery = new WP_Query( 'cat=6&posts_per_page=2' );
                            while($catquery->have_posts()) : $catquery->the_post();
                            ?>
                                <?php 
                                    $text = get_the_content();

                                    if (strlen($text) > 70) {
                                        $text = substr($text,0,70);
                                        $text .= "..";
                                    }
                                        
                                ?> 

                                <b style="margin-top:0px;font-size:14px;line-height:80%;"><a style="margin-top:0px;font-size:14px;line-height:80%;" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></b>
                                <p style="margin-top:0px;font-size:13px;"><?php echo $text; ?></p>
                            
                        <?php endwhile; ?>

                    </div>
                    <div id="box5" class="small-box">
                        <b>Twitter</b>
                        <hr />
                        <div style="min-height:180px;" id="twitter-text"></div>
                    </div>     
                    <div id="box6" class="small-box">
                        <b>Instagram</b>
                        <hr />
                        <iframe id="instagram" scrolling="no" frameborder="0" width="184" align="center" src="http://instaembedder.com/gallery.php?username=uddaorg&hashtag=&width=60&cols=3&frame=0&image_border=0&rows=3&cell_margin=2&display_username=0&likes=0&comments=0&date=0&link=0&caption=0&color=gray" style="display:block; height: 184px; margin:0px auto;" onload=""></iframe>
                    </div>

                    <div id="box7" class="small-box">
                        <b>Facebook</b>
                        <hr />
                        <iframe scrolling="yes" marginheight="0" frameborder="0" width="200" style="overflow-y: scroll; overflow-x: hidden; height: 184px;" src="http://facebookgalleria.com/album.php?id=515106035271912&amp;noback=1&amp;exclude=&amp;type=photos&amp;rows=3&amp;margin=2&amp;cols=3&amp;width=60&amp;title_color=000000&amp;hide_next_back=0"></iframe>
                    </div>                       
                </div>                                                      
            
        </div>
    </div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();