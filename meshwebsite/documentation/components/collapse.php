<?php

//Page variables
$pageData = [
    'pageTitle' => 'Collapse',
    'pageDescription' => 'Something about this page',
    'activePage' => 'collapse',
    'parentDirectory' => basename(__DIR__),
];

//Table of contents
//! DUPLICATE FOR CONTENTS ITEM,
//! If you add an article, make sure the Id matches the first value here.
$tableOfContents = [
    'usage' => 'Usage',
];

?>

<?php include_once '../../partials/header.php';?>
<?php include_once '../../partials/sidenav.php';?>

<section class="content collapse-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0"><?php echo $pageData['pageTitle'] ?></h1>
                <div class="lead"><?php echo $pageData['pageDescription'] ?></div>

                <!-- Usage -->
                <article class="section-scroll" id="usage">
                    <h2 class="b-b-light hash">Usage</h2>
                    <p class="secondary-lead">
                        Use the <code class="inline">class</code> for inline code.
                        <br>Another line of something.
                    </p>
                    <div class="text-cont">
                        <div class="alert">
                            Please wrap all your text in a <code class="inline">text-cont</code> class.
                        </div>

                    </div>
                    <pre class="highlight"><code class="html">&lt;div class="alert"&gt;
    This is a default alert
&lt;/div&gt;
</code><img class="copy-to-clipboard"src="/assets/icons/copy.svg" alt="Copy icon"><img class="copy-tick"src="/assets/icons/checked.svg" alt="Success icon"></pre>
                </article>

                <h3 class="mt-4">Expanded</h3>
                <div class="collapse">
                    <div class="collapse-item">
                        <div class="collapse-header">
                            <span class="collapse-title"># Collapsible item no 1.</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="collapse-content">
                            <p>Fingerstache paleo copper mug 8-bit taiyaki. Semiotics normcore live-edge mumblecore letterpress hammock flexitarian. Hexagon mlkshk tote bag actually. Woke vaporware tumeric iPhone pop-up bushwick, cliche letterpress raw denim affogato. Irony deep v salvia, farm-to-table bitters craft beer chicharrones portland lo-fi kickstarter green juice. Flannel polaroid iPhone fixie, franzen swag meggings hoodie cray master cleanse shabby chic.</p>
                        </div>
                    </div>
                    <div class="collapse-item">
                        <div class="collapse-header">
                            <span class="collapse-title"># Collapsible item no 2.</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="collapse-content">
                            <p>Photo booth bespoke ethical, affogato snackwave plaid typewriter shaman health goth master cleanse intelligentsia humblebrag. Keytar sartorial etsy polaroid knausgaard. Roof party echo park man bun direct trade. Ethical la croix yr, wayfarers beard chillwave man braid DIY austin brunch palo santo cray plaid live-edge yuccie. XOXO thundercats fam keffiyeh bicycle rights sriracha copper mug artisan shoreditch pitchfork gastropub neutra deep v.</p>
                        </div>
                    </div>
                    <div class="collapse-item">
                        <div class="collapse-header">
                            <span class="collapse-title"># Collapsible item no 3.</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="collapse-content">
                            <p>Cornhole organic yr, flannel air plant irony bicycle rights listicle locavore crucifix kinfolk jianbing thundercats plaid. Kogi raw denim selvage, air plant vice fashion axe 3 wolf moon offal schlitz occupy kinfolk distillery yr. Franzen slow-carb DIY coloring book. Pitchfork hell of tacos, semiotics squid shaman ennui mumblecore ugh etsy XOXO freegan umami. You probably haven't heard of them wayfarers tumblr semiotics drinking vinegar iPhone enamel pin fixie.</p>
                        </div>
                    </div>
                </div>

                <h3 class="mt-4">No Animation</h3>
                <div class="collapse collapse-css">
                    <div class="collapse-item">
                        <input type="checkbox" class="collapse-toggle" id="collapse1">
                        <label class="collapse-header" for="collapse1">
                            <span class="collapse-title"># Collapsible item no 1.</span>
                            <i class="fas fa-chevron-down"></i>
                        </label>
                        <div class="collapse-content">
                            <p>Fingerstache paleo copper mug 8-bit taiyaki. Semiotics normcore live-edge mumblecore letterpress hammock flexitarian. Hexagon mlkshk tote bag actually. Woke vaporware tumeric iPhone pop-up bushwick, cliche letterpress raw denim affogato. Irony deep v salvia, farm-to-table bitters craft beer chicharrones portland lo-fi kickstarter green juice. Flannel polaroid iPhone fixie, franzen swag meggings hoodie cray master cleanse shabby chic.</p>
                        </div>
                    </div>
                    <div class="collapse-item">
                        <input type="checkbox" class="collapse-toggle" id="collapse2">
                        <label class="collapse-header" for="collapse2">
                            <span class="collapse-title"># Collapsible item no 2.</span>
                            <i class="fas fa-chevron-down"></i>
                        </label>
                        <div class="collapse-content">
                            <p>Photo booth bespoke ethical, affogato snackwave plaid typewriter shaman health goth master cleanse intelligentsia humblebrag. Keytar sartorial etsy polaroid knausgaard. Roof party echo park man bun direct trade. Ethical la croix yr, wayfarers beard chillwave man braid DIY austin brunch palo santo cray plaid live-edge yuccie. XOXO thundercats fam keffiyeh bicycle rights sriracha copper mug artisan shoreditch pitchfork gastropub neutra deep v.</p>
                        </div>
                    </div>
                    <div class="collapse-item">
                        <input type="checkbox" class="collapse-toggle" id="collapse3">
                        <label class="collapse-header" for="collapse3">
                            <span class="collapse-title"># Collapsible item no 3.</span>
                            <i class="fas fa-chevron-down"></i>
                        </label>
                        <div class="collapse-content">
                            <p>Cornhole organic yr, flannel air plant irony bicycle rights listicle locavore crucifix kinfolk jianbing thundercats plaid. Kogi raw denim selvage, air plant vice fashion axe 3 wolf moon offal schlitz occupy kinfolk distillery yr. Franzen slow-carb DIY coloring book. Pitchfork hell of tacos, semiotics squid shaman ennui mumblecore ugh etsy XOXO freegan umami. You probably haven't heard of them wayfarers tumblr semiotics drinking vinegar iPhone enamel pin fixie.</p>
                        </div>
                    </div>
                </div>

                <h3 class="mt-4">Javascript</h3>
                <div class="collapse collapse-css">
                    <div class="collapse-item">
                        <input type="checkbox" class="collapse-toggle" id="collapse1">
                        <label class="collapse-header" for="collapse1">
                            <span class="collapse-title"># Collapsible item no 1.</span>
                            <i class="fas fa-chevron-down"></i>
                        </label>
                        <div class="collapse-content">
                            <p>Fingerstache paleo copper mug 8-bit taiyaki. Semiotics normcore live-edge mumblecore letterpress hammock flexitarian. Hexagon mlkshk tote bag actually. Woke vaporware tumeric iPhone pop-up bushwick, cliche letterpress raw denim affogato. Irony deep v salvia, farm-to-table bitters craft beer chicharrones portland lo-fi kickstarter green juice. Flannel polaroid iPhone fixie, franzen swag meggings hoodie cray master cleanse shabby chic.</p>
                        </div>
                    </div>
                    <div class="collapse-item">
                        <input type="checkbox" class="collapse-toggle" id="collapse2">
                        <label class="collapse-header" for="collapse2">
                            <span class="collapse-title"># Collapsible item no 2.</span>
                            <i class="fas fa-chevron-down"></i>
                        </label>
                        <div class="collapse-content">
                            <p>Photo booth bespoke ethical, affogato snackwave plaid typewriter shaman health goth master cleanse intelligentsia humblebrag. Keytar sartorial etsy polaroid knausgaard. Roof party echo park man bun direct trade. Ethical la croix yr, wayfarers beard chillwave man braid DIY austin brunch palo santo cray plaid live-edge yuccie. XOXO thundercats fam keffiyeh bicycle rights sriracha copper mug artisan shoreditch pitchfork gastropub neutra deep v.</p>
                        </div>
                    </div>
                    <div class="collapse-item">
                        <input type="checkbox" class="collapse-toggle" id="collapse3">
                        <label class="collapse-header" for="collapse3">
                            <span class="collapse-title"># Collapsible item no 3.</span>
                            <i class="fas fa-chevron-down"></i>
                        </label>
                        <div class="collapse-content">
                            <p>Cornhole organic yr, flannel air plant irony bicycle rights listicle locavore crucifix kinfolk jianbing thundercats plaid. Kogi raw denim selvage, air plant vice fashion axe 3 wolf moon offal schlitz occupy kinfolk distillery yr. Franzen slow-carb DIY coloring book. Pitchfork hell of tacos, semiotics squid shaman ennui mumblecore ugh etsy XOXO freegan umami. You probably haven't heard of them wayfarers tumblr semiotics drinking vinegar iPhone enamel pin fixie.</p>
                        </div>
                    </div>
                </div>

            </div><!-- /Col -->
            <?php include_once '../../partials/smallnav.php'?>
            <?php include_once '../../partials/sub-footer.php'?>
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

<?php include_once '../../partials/footer.php'?>

<?php function scripts()
{?>
<script>
//!Any page relevant JS scripts to go in here.
</script>
<?php }?>