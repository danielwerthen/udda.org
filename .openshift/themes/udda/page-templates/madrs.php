<?php
/**
 * Template Name: MADRS
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<style>

    .madrs_ul {
       list-style-type: none;
    }

    .madrs_ul li {
        padding-top:10px;
        padding-bottom:10px;
        border-bottom:1px solid #ccc;
    }

    label {
        margin-left:20px;
        display:inline-block;
        cursor:pointer;
    }

    .choice {
        width:20px;
        height:20px;
        display:block;
        margin-left:-20px;
        margin-bottom:-17px;
    }

</style>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">


            <article class="page type-page status-publish hentry">
                <header class="entry-header"><h1 class="entry-title">Självtest | MADRS</h1></header><!-- .entry-header -->
                <div class="entry-content">


                <?php 

                    if (isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']) && isset($_POST['q6']) && isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9'])) {

                        $total = 0;
                        for ($i = 1; $i <= 9; $i++) {
                            $total += $_POST["q".$i];
                        }

                        if ($total > 0 && $total < 12) {
                            $result = "Du lider inte av någon depression.";
                        }

                        if ($total > 11 && $total < 21) {
                            $result = "Du lider av måttlig depression.";
                        }

                        if ($total > 20 && $total < 41) {
                            $result = "Sannolikhet är hög för egentlig depression om ditt tillstånd har varat i mer än två veckor.";
                        }

                        if ($total > 40) {
                            $result = "Inläggning på psykiatrisk klink bör övervägas (detta beror delvis på förekomst av självmordstankar, anhörigstöd etc.)";
                        }

                        echo "<h3>Resultat</h3>";
                        echo "<p>".$result."</p>";

                    } else { ?>

                        <form name="madrs" method="POST">

                            <div style="padding:20px; margin-bottom:30px;">
                                <h3>Sinnesstämning</h3>
                                <p>Här ber vi dig beskriva din sinnesstämning, om du känner dig ledsen, tungsint eller dyster till mods. Tänk efter hur du har känt dig de senaste tre dagarna, om du har skiftat i humöret eller om det har varit i stort sett detsamma hela tiden, och försök särskilt komma ihåg om du har känt dig lättare till sinnes om det har hänt något positivt.</p>

                                <ul class="madrs_ul">
                                    <li><label><div class="choice"><input type="radio" name="q1" value="0"></div>Jag kan känna mig glad eller ledsen, allt efter omständigheterna.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q1" value="2"></div>Jag känner mig nedstämd för det mesta, men ibland kan det kännas lättare.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q1" value="4"></div>Jag känner mig genomgående nedstämd och dyster. Jag kan inte glädja mig åt sådant som vanligen skulle göra mig glad.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q1" value="6"></div>Jag är totalt nedstämd och olycklig att jag inte kan tänka mig värre.</label></li>
                                </ul>
                            </div>


                            <div style="padding:20px; margin-bottom:30px;">
                                <h3>Oroskänslor</h3>
                                <p>Här ber vi dig markera i vilken utsträckning du haft känslor av inre spänning, olust och ångest eller odefinierad rädsla under de senaste tre dagarna. Tänk särskilt på hur intensiva känslorna varit, och om de kommit och gått eller funnits hela tiden.</p>

                                <ul class="madrs_ul">
                                    <li><label><div class="choice"><input type="radio" name="q2" value="0"></div>Jag känner mig mestadels lugn.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q2" value="2"></div>Ibland har jag obehagliga känslor av inre oro.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q2" value="4"></div>Jag har ofta en känsla av inre oro som ibland kan bli mycket stark, och som jag måste anstränga mig för att bemästra.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q2" value="6"></div>Jag har fruktansvärda, långvariga eller outhärdliga ångestkänslor.</label></li>
                                </ul>
                            </div>


                            <div style="padding:20px; margin-bottom:30px;">
                                <h3>Sömn</h3>
                                <p>Här ber vi dig beskriva hur bra du sover. Tänk efter hur länge du sovit och hur god sömnen varit under de senaste tre nätterna. Bedömningen skall avse hur du faktiskt sovit, oavsett om du tagit sömnmedel eller ej.</p>

                                <ul class="madrs_ul">
                                    <li><label><div class="choice"><input type="radio" name="q3" value="0"></div>Jag sover lugnt och bra och tillräckligt länge för mina behov. Jag har inga särskilda svårigheter att somna.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q3" value="2"></div>Jag har vissa sömnsvårigheter. Ibland har jag svårt att somna eller sover ytligare eller oroligare än vanligt.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q3" value="4"></div>Jag sover minst två timmar mindre per natt än normalt. Jag vaknar ofta under natten, även om jag inte blir störd.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q3" value="6"></div>Jag sover mycket dåligt, inte mer än 2-3 timmar per natt.</label></li>
                                </ul>
                            </div>


                            <div style="padding:20px; margin-bottom:30px;">
                                <h3>Matlust</h3>
                                <p>Här ber vi dig ta ställning till hur din aptit är, och tänka efter om den på något sätt skilt sig från vad som är normalt för dig.</p>

                                <ul class="madrs_ul">
                                    <li><label><div class="choice"><input type="radio" name="q4" value="0"></div>Min aptit är som den brukar vara.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q4" value="2"></div>Min aptit är sämre än vanligt.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q4" value="4"></div>Min aptit har nästan helt försvunnit. Maten smakar inte och jag måste tvinga mig att äta.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q4" value="6"></div>Jag vill inte ha någon mat. Om jag skall få någonting i mig, måste jag övertalas att äta.</label></li>
                                </ul>
                            </div>

                            <div style="padding:20px; margin-bottom:30px;">
                                <h3>Koncentrationsförmåga</h3>
                                <p>Här ber vi dig ta ställning till din förmåga att hålla tankarna samlade och koncentrera dig på olika aktiviteter. Tänk igenom hur du fungerar vid olika sysslor som kräver olika grad av koncentrationsförmåga, t ex läsning av komplicerad text, lätt tidningstext och TV-tittande.</p>

                                <ul class="madrs_ul">
                                    <li><label><div class="choice"><input type="radio" name="q5" value="0"></div>Jag har inga koncentrationssvårigheter.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q5" value="2"></div>Jag har tillfälligt svårt att hålla tankarna samlade på sådant som normalt skulle fånga min uppmärksamhet (till exempel läsning eller TV-tittande).</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q5" value="4"></div>Jag har påtagligt svårt att koncentrera mig på sådant som normalt inte kräver någon ansträngning från min sida (till exempel läsning eller samtal med andra människor).</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q5" value="6"></div>Jag kan överhuvudtaget inte koncentrera mig på någonting.</label></li>
                                </ul>
                            </div>

                            <div style="padding:20px; margin-bottom:30px;">
                                <h3>Initiativförmåga</h3>
                                <p>Här ber vid dig försöka värdera din handlingskraft. Frågan gäller om du har lätt eller svårt för att komma igång med sådant du tycker du bör göra, och i vilken utsträckning du måste över vinna ett inre motstånd när du skall ta itu med något.</p>

                                <ul class="madrs_ul">
                                    <li><label><div class="choice"><input type="radio" name="q6" value="0"></div>Jag har inga svårigheter med att ta itu med nya uppgifter.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q6" value="2"></div>När jag skall ta itu med något, tar det emot på ett sätt som inte är normalt för mig.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q6" value="4"></div>Det krävs en stor ansträngning för mig att ens komma igång med enkla uppgifter som jag vanligtvis utför mer eller mindre rutinmässigt.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q6" value="6"></div>Jag kan inte förmå mig att ta itu med de enklaste vardagssysslor.</label></li>
                                </ul>
                            </div> 

                            <div style="padding:20px; margin-bottom:30px;">
                                <h3>Känslomässigt engagemang</h3>
                                <p>Här ber vi dig ta ställning till hur du upplever ditt intresse för omvärlden och för andra människor, och för sådana aktiviteter som brukar bereda dig nöje och glädje.</p>

                                <ul class="madrs_ul">
                                    <li><label><div class="choice"><input type="radio" name="q7" value="0"></div>Jag är intresserad av omvärlden och engagerar mig i den, och det bereder mig både nöje och gläd</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q7" value="2"></div>Jag känner mindre starkt för sådant som brukar engagera mig. Jag har  svårare än vanligt att bli glad eller svårare att bli arg när det är befogat.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q7" value="4"></div>Jag kan inte känna något intresse för omvärlden, inte ens för vänner och bekanta.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q7" value="6"></div>Jag har slutat uppleva några känslor. Jag känner mig smärtsamt likgiltig även för mina närmaste.</label></li>
                                </ul>
                            </div> 

                            <div style="padding:20px; margin-bottom:30px;">
                                <h3>Pessimism</h3>
                                <p>Frågan gäller hur du ser på din egen framtid och hur du uppfattar ditt eget värde. Tänk efter i vilken utsträckning du ger dig självförebråelser, om du plågas av skuldkänslor, och om du oroat dig oftare än vanligt för till exempel din ekonomi eller din hälsa.</p>

                                <ul class="madrs_ul">
                                    <li><label><div class="choice"><input type="radio" name="q8" value="0"></div>Jag ser på framtiden med tillförsikt. Jag är på det hela taget ganska nöjd med mig själv.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q8" value="2"></div>Ibland klandrar jag mig själv och tycker att jag är mindre värd än andra.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q8" value="4"></div>Jag grubblar ofta över mina misslyckanden och känner mig mindervärdig eller dålig, även om andra tycker annorlunda.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q8" value="6"></div>Jag ser allting i svart och kan inte se någon ljusning. Det känns som om jag var en alltigenom dålig människa, och som om jag aldrig skulle kunna få någon förlåtelse för det hemska jag gjort.</label></li>
                                </ul>
                            </div>

                            <div style="padding:20px; margin-bottom:30px;">
                                <h3>Livslust</h3>
                                <p>Frågan gäller din livslust, och om du känt livsleda. Har du tankar på självmord, och i så fall, i vilken utsträckning upplever du detta som en verklig utväg?</p>

                                <ul class="madrs_ul">
                                    <li><label><div class="choice"><input type="radio" name="q9" value="0"></div>Jag har normal aptit på livet.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q9" value="2"></div>Livet känns inte särskilt meningsfullt men jag önskar ändå inte att jag vore död.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q9" value="4"></div>Jag tycker ofta det vore bättre att vara död, och trots att jag egentligen inte önskar det, kan självmord ibland kännas som en möjlig utväg.</label></li>
                                    <li><label><div class="choice"><input type="radio" name="q9" value="6"></div>Jag är egentligen övertygad om att min enda utväg är att dö, och jag tänker mycket på hur jag bäst skall gå tillväga för att ta mitt eget liv.</label></li>
                                </ul>
                            </div>                                                 
                            

                            <input type="submit" value="Beräkna resultat">

                        </form>

                        <br /><br />
                        <p>MADRS betyder Montgomery Åsberg Depression Rating Scale. Skalan är utvecklad ur ett annat större batteri av frågor kallat CPRS (Comprehensive psychopatological rating scale). Instrumentet består av nio frågor där man kan få mellan 0 till 6 poäng (så teoretiskt kan man ha mellan 0-54 poäng totalt). Ju högre poäng, desto högre grad av depression. Instrumentet är mycket väl studerat och används i många vetenskapliga utvärderingar av depression världen över. Avsikten med formuläret är att ge en detaljerad bild av ditt nuvarande sinnestillstånd.</p>
                        <p>Formuläret innehåller en rad påståenden om hur man kan må i olika avseenden. Påståendena uttrycker olika grader av obehag, från frånvaro av obehag till maximalt uttalat obehag.</p>
                        <p>Välj det alternativ som du tycker bäst stämmer med hur du mått de senaste tre dagarna. Klicka endast i ett alternativ per fråga. Tänk inte alltför länge, utan försök arbeta snabbt.</p>


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
