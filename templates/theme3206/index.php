<?php
defined('_JEXEC') or die;
include_once('includes/includes.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>"
lang="<?php echo $this->language; ?>">
<head>
    <?php
    echo $viewport;
    if ($themeLayout == 1) {
        $doc->addStyleSheet('templates/' . $this->template . '/css/layout.css');
    }
    if ($hideByEdit == false) {
        $doc->addStyleSheet('templates/' . $this->template . '/css/jquery.fancybox.css');
        $doc->addStyleSheet('templates/' . $this->template . '/css/jquery.fancybox-buttons.css');
        $doc->addStyleSheet('templates/' . $this->template . '/css/jquery.fancybox-thumbs.css');
        $doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
        $doc->addStyleSheet('templates/' . $this->template . '/css/fl-outicons.css');
        $doc->addStyleSheet('templates/' . $this->template . '/css/template.css');
    } else {
        $doc->addStyleSheet('administrator/templates/' . $adminTemplate . '/css/template.css');
        $doc->addStyleSheet('templates/' . $this->template . '/css/edit.css');
    }
    ?>
    <jdoc:include type="head"/>
</head>
<body class="<?php echo $bodyClass; ?>">
    <?php echo $ie_warning; ?>
    <div id="wrapper">
        <div class="wrapper-inner">
            <?php if ($this->countModules('top') && $hideByView == false && $hideByEdit == false): ?>
                <a id="fake" href='#'></a>
                <!-- Top -->
                <div id="top">
                    <jdoc:include type="modules" name="top" style="html5nosize"/>
                </div>
            <?php endif; ?>
            <!-- Header -->
            <?php if ($this->countModules('header') || $this->countModules('navigation')): ?>
                <div id="header"> 
                    <?php 
                    if ($hideByView == false && $hideByEdit == false) {
                       ?>
                       <div class="top-container">
                        <jdoc:include type="modules" name="header" style="themeHtml5"/>
                    </div>
                    <?php

                } ?>
                <?php if ($this->countModules('navigation')): ?>
                    <!-- Navigation -->
                    <div id="navigation" role="navigation">
                        <!-- Logo -->
                            <!--div id="logo" class="span<?php echo $this->params->get('logoBlockWidth'); ?>">
                                <a href="<?php echo JURI::base(); ?>">
                                    <?php if (isset($logo)) : ?>
                                        <img src="<?php echo $logo; ?>" alt="<?php echo $sitename; ?>">
                                        <h1><?php echo $sitename; ?></h1>
                                    <?php else : ?>
                                        <h1><?php echo wrap_chars_with_span($sitename); ?></h1><?php endif; ?>
                                </a>
                            </div-->
                            <jdoc:include type="modules" name="navigation" style="themeHtml5"/>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if ($this->countModules('showcase') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Showcase -->
                <div id="showcase">

                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="showcase" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('feature') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Feature -->
                <div id="feature">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="feature" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('maintop') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Maintop -->
                <div id="maintop">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="maintop" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Main Content row -->
            <div id="content">
                <?php if ($this->countModules('breadcrumbs') && $hideByEdit == false): ?>
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <!-- Breadcrumbs -->
                            <div id="breadcrumbs" class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="breadcrumbs" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($this->countModules('map') && $hideByView == false && $hideByEdit == false): ?>
                    <!-- Map -->
                    <div id="map">
                        <jdoc:include type="modules" name="map" style="html5nosizeMap"/>
                    </div>
                <?php endif; ?>
                <div class="row-container">
                    <div class="<?php echo $containerClass; ?>">
                        <div class="content-inner <?php echo $rowClass; ?>">
                            <?php if ($this->countModules('aside-left') && $hideByOption == false && $view !== 'form' && $hideByEdit == false): ?>
                                <!-- Left sidebar -->
                                <div id="aside-left" class="span<?php echo $asideLeftWidth; ?>">
                                    <aside role="complementary">
                                        <jdoc:include type="modules" name="aside-left" style="html5nosize"/>
                                    </aside>
                                </div>
                            <?php endif; ?>
                            <div id="component" class="span<?php echo $mainContentWidth; ?>">
                                <main role="main">
                                    <?php if ($this->countModules('content-top') && $hideByView == false && $hideByEdit == false): ?>
                                        <!-- Content-top -->
                                        <div id="content-top" class="<?php echo $rowClass; ?>">
                                            <jdoc:include type="modules" name="content-top" style="themeHtml5"/>
                                        </div>
                                    <?php endif; ?>
                                    <jdoc:include type="message"/>
                                    <jdoc:include type="component"/>
                                    <?php if ($this->countModules('content-bottom') && ($hideByOption) == false && $view !== 'form' && $hideByEdit == false): ?>
                                        <!-- Content-bottom -->
                                        <div id="content-bottom" class="<?php echo $rowClass; ?>">
                                            <jdoc:include type="modules" name="content-bottom" style="themeHtml5"/>
                                        </div>
                                    <?php endif; ?>
                                </main>
                            </div>
                            <?php if ($this->countModules('aside-right') && ($hideByOption) == false && $view !== 'form' && $hideByEdit == false): ?>
                                <!-- Right sidebar -->
                                <div id="aside-right" class="span<?php echo $asideRightWidth; ?>">
                                    <aside role="complementary">
                                        <jdoc:include type="modules" name="aside-right" style="html5nosize"/>
                                    </aside>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($this->countModules('video') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Video -->
                <div id="video">
                    <jdoc:include type="modules" name="video" style="html5nosize"/>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('mainbottom') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Mainbottom -->
                <div id="mainbottom">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="mainbottom" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('mainbottom-2') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Mainbottom -->
                <div id="mainbottom-2">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="mainbottom-2" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('mainbottom-3') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Mainbottom -->
                <div id="mainbottom-3">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="mainbottom-3" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('mainbottom-4') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Mainbottom -->
                <div id="mainbottom-4">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="mainbottom-4" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('mainbottom-5') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Mainbottom -->
                <div id="mainbottom-5">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="mainbottom-5" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('bottom') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Bottom -->
                <div id="bottom">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="bottom" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('footer') && $hideByView == false && $hideByEdit == false): ?>
                <!-- Footer -->
                <div id="footer">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <jdoc:include type="modules" name="footer" style="themeHtml5"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div id="push"></div>
        </div>
    </div>
    <?php if ($hideByEdit == false): ?>
        <div id="footer-wrapper">
            <div class="footer-wrapper-inner">
                <!-- Copyright -->
                <div id="copyright" role="contentinfo">
                    <div class="row-container">
                        <div class="<?php echo $containerClass; ?>">
                            <div class="<?php echo $rowClass; ?>">
                                <div class="copyright span<?php echo $this->params->get('footerWidth'); ?>">
                                    <div class="copyrightInner">
                                        <?php if ($this->params->get('footerLogo') == 1) : ?>
                                            <!-- Footer Logo -->
                                            <a class="footer_logo" href="<?php echo $this->baseurl; ?>"><img
                                                src="<?php echo $footerLogo; ?>" alt="<?php echo $sitename; ?>"/></a>
                                            <?php else: ?>
                                                <span class="siteName"><?php echo $sitename; ?></span>
                                            <?php endif; ?>
                                            <?php if ($this->params->get('footerCopy') == 1) echo '<span class="copy">&copy;</span>'; ?>
                                            <?php if ($this->params->get('footerYear') == 1) echo '<span class="year">' . date('Y') . '</span>'; ?>
                                            <?php if ($this->params->get('privacyLink') == 1) : ?>
                                                <a class="privacy_link" rel="license"
                                                href="<?php echo $privacy_link_url; ?>"><?php echo $this->params->get('privacy_link_title'); ?></a>
                                            <?php endif; ?>
                                            <?php if ($this->params->get('termsLink') == 1) : ?>
                                                <a class="terms_link"
                                                href="<?php echo $terms_link_url; ?>"><?php echo $this->params->get('terms_link_title'); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php echo $todesktop; ?>
                                    <!-- {%FOOTER_LINK} -->
                                </div>
                            </div>
                        </div>
                        <jdoc:include type="modules" name="copyright" style="themeHtml5"/>
                    </div>
                </div>
            </div>
            <?php if ($this->params->get('totop')): ?>
                <div id="back-top">
                    <a href="#"><span></span><?php echo $this->params->get('totop_text') ?></a>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('modal')): ?>
                <div id="modal" class="modal hide fade loginPopup">
                    <div class="modal-hide"></div>
                    <div class="modal_wrapper">
                        <button type="button" class="close modalClose">×</button>
                        <jdoc:include type="modules" name="modal" style="modal"/>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('fixed-sidebar-left')): ?>
                <jdoc:include type="modules" name="fixed-sidebar-left" style="none"/>
            <?php endif; ?>
            <?php if ($this->countModules('fixed-sidebar-right')): ?>
                <div id="fixed-sidebar-right">
                    <jdoc:include type="modules" name="fixed-sidebar-right" style="sidebar"/>
                </div>
            <?php endif; ?>
            <jdoc:include type="modules" name="debug" style="none"/>

            <?php if ($client->platform == JApplicationWebClient::IPHONE || $client->platform == JApplicationWebClient::IPAD){
                if (isset($_COOKIE['disableMobile'])){ ?>
                <?php if ($_COOKIE['disableMobile'] == 'false'){ ?>
                <script src="<?php echo 'templates/' . $this->template . '/js/ios-orientationchange-fix.js'; ?>"></script>
                <?php }
            }
            else { ?>
            <script src="<?php echo 'templates/' . $this->template . '/js/ios-orientationchange-fix.js'; ?>"></script>
            <?php }
        }
        if ($client->mobile){ ?>
        <script src="<?php echo 'templates/' . $this->template . '/js/desktop-mobile.js'; ?>"></script>
        <?php } ?>

        <?php if ($this->params->get('blackandwhite')): ?>
            <script src="<?php echo 'templates/' . $this->template . '/js/jquery.BlackAndWhite.min.js'; ?>"></script>
            <script>
                ;
                (function ($, undefined) {
                    $.fn.BlackAndWhite_init = function () {
                        var selector = $(this);
                        selector.find('img').not(".slide-img").parent().BlackAndWhite({
                            invertHoverEffect: ".$this->params->get('invertHoverEffect').",
                            intensity: 1,
                            responsive: true,
                            speed: {
                                fadeIn: ".$this->params->get('fadeIn').",
                                fadeOut: ".$this->params->get('fadeOut')."
                            }
                        });
                    }
                })(jQuery);
                jQuery(window).load(function ($) {
                    jQuery('.item_img a').find('img').not('.lazy').parent().BlackAndWhite_init();
                });
            </script>
        <?php endif; ?>
        <script type="text/javascript">var path = "<?php echo $this->baseurl . '/templates/' . $this->template ?>";
            var isMobile = "<?php echo ($client->mobile) ? 'true' : 'false' ?>";
            </script>
        <script src="<?php echo 'templates/' . $this->template . '/js/scripts.js'; ?>"></script>
    <?php endif; ?>
</body>
</html>