<?php

/** Request Info Button */
add_shortcode('sps-request-info-button', 'create_request_info_button');
/**
 * Request Info Button
 *
 * https://codex.wordpress.org/Function_Reference/site_url
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_request_info_button()
{
    $site_url = site_url();
    ob_start();
    ?>

    <div class="align-center">
        <a href="<?php echo $site_url; ?>/contact/request-a-quote/">
            <img class="button-image" title="Grasscrete Projects - Request a Quote"
                 src="<?php echo $site_url; ?>/wp-content/uploads/2014/03/request_quote.png" alt="Request A Quote"
                 width="165" height="81"/>
        </a>
    </div>

    <?php
    return ob_get_clean();
}

/** Responsive Columns For Products > Grasscrete > Technical */
add_shortcode('sps-technical-columns', 'create_sps_technical_columns');
/**
 * Responsive Columns For Products > Grasscrete > Technical
 *
 * https://codex.wordpress.org/Function_Reference/site_url
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_sps_technical_columns()
{
    $site_url = site_url();
    ob_start();
    ?>

    <h4 class="blue-bold">Molded Pulp Former AutoCad Drawings</h4>
    <div class="col-container noborder">
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Molded-Pulp-Former-System-Void-Grassed.jpg"
               title="SPS Grasscrete Molded Pulp Former System - Void Grassed" target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Molded-Pulp-Former-System-Void-Grassed-150x150.jpg"
                     alt="SPS Grasscrete Molded Pulp Former System - Void Grassed"
                     title="SPS Grasscrete Molded Pulp Former System - Void Grassed" width="150" height="150">
                <span class="sr-only">SPS Grasscrete Molded Pulp Former System - Void Grassed</span>
            </a>
            <div class="col noborder">
                Partially Concealed
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Molded-Pulp-Former-System-Void-Grassed.pdf"
                   title="SPS Grasscrete Molded Pulp Former System - Void Grassed" target="_blank"><span
                            class="pdf_icon"></span>
                    <span class="sr-only">SPS Grasscrete Molded Pulp Former System - Void Grassed pdf</span>
                </a> <a
                        href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-Grasscrete-Molded-Pulp-Former-System-Void-Grassed.dwg"
                        title="SPS Grasscrete Molded Pulp Former System - Void Grassed" target="_blank"><span
                            class="dwg_icon"></span>
                    <span class="sr-only">SPS Grasscrete Molded Pulp Former System - Void Grassed dwg</span>
                </a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/concealed.png" target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/concealed-150x150.png" alt="concealed"
                     title="Molded Pulp Former AutoCad Drawings - Partially Concealed" width="150" height="150"></a>
            <div class="col noborder">
                Concealed
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Molded-Pulp-Former-System-Fully-Grassed.pdf"
                   title="SPS Grasscrete Molded Pulp Former System Fully Grassed" target="_blank"><span
                            class="pdf_icon"></span>
                    <span class="sr-only">SPS Grasscrete Molded Pulp Former System Fully Grassed pdf</span>
                </a> <a
                        href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-Grasscrete- Molded-Pulp-Former-System - Fully-Grassed.dwg"
                        title="SPS Grasscrete Molded Pulp Former System Fully Grassed" target="_blank"><span
                            class="dwg_icon"></span>
                    <span class="sr-only">SPS Grasscrete Molded Pulp Former System Fully Grassed dwg</span>
                </a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/stone-filled.png" target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/stone-filled-150x150.png"
                     alt="stone filled"
                     title="Molded Pulp Former AutoCad Drawings - Stone Filled" width="150" height="150"></a>
            <div class="col noborder">
                Stone Filled
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Molded-Pulp-Former-System-Stone-Filled.pdf"
                   title="SPS Grasscrete Molded Pulp Former System Stone Filled" target="_blank"><span
                            class="pdf_icon"></span>
                    <span class="sr-only">SPS Grasscrete Molded Pulp Former System Stone Filled pdf</span>
                </a> <a
                        href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-Grasscrete-Molded-Pulp-FormerSystem-Stone-Filled.dwg"
                        title="SPS Grasscrete Molded Pulp Former System Stone Filled" target="_blank"><span
                            class="dwg_icon"></span>
                    <span class="sr-only">SPS Grasscrete Molded Pulp Former System Stone Filled dwg</span>
                </a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grascrete-Molded-Pulp-Former-System-Part-Plan.jpg"
               target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grascrete-Molded-Pulp-Former-System-Part-Plan-150x150.jpg"
                     alt="SPS Grascrete Molded Pulp Former System - Part Plan"
                     title="SPS Grascrete Molded Pulp Former System - Part Plan" width="150" height="150"></a>
            <div class="col noborder">
                Part Plan
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grascrete-Molded-Pulp-Former-System-Part-Plan.pdf"
                   target="_blank"><span class="pdf_icon"></span>
                    <span class="sr-only">SPS Grascrete Molded Pulp Former System - Part Plan pdf</span>
                </a> <a
                        href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-Grasscrete-Molded-Pulp-System-Part-Plan.dwg"
                        target="_blank" title="SPS Grascrete Molded Pulp Former System - Part Plan"><span
                            class="dwg_icon"></span>
                    <span class="sr-only">SPS Grascrete Molded Pulp Former System - Part Plan dwg</span></a>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>

    <h4 class="blue-bold">Generic Drawings</h4>
    <div class="col-containercol-container-half-wide noborder">
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Single-Use-Systems-Slope-Protection.jpg"
               target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Single-Use-Systems-Slope-Protection-150x150.jpg"
                     alt="SPS Grasscrete Single Use Systems - Slope Protection"
                     title="Technical Downloads - Slope Protection Grasscrete" width="150" height="150"></a>
            <div class="col noborder">
                Slope Protection
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Single-Use-Systems-Slope-Protection.pdf"
                   target="_blank"><span class="pdf_icon"></span>
                    <span class="sr-only">Single Use Systems Slope Protection pdf</span>
                </a> <a
                        href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-GrasscreteSingleUseSystems-SlopeProtection.dwg"
                        target="_blank"><span class="dwg_icon"></span>
                    <span class="sr-only">Single Use Systems Slope Protection dwg</span>
                </a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Single-Use-System-Standard-Parking-Stall-Layout.jpg"
               target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Single-Use-System-Standard-Parking-Stall-Layout-150x150.jpg"
                     title="Technical Download - Standard Parking Stall Layout"
                     alt="SPS Grasscrete Single Use System - Standard Parking Stall Layout" width="150"
                     height="150"></a>
            <div class="col noborder">
                Standard Parking Stall Layout
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Single-Use-System-Standard-Parking-Stall-Layout.pdf"
                   target="_blank"><span class="pdf_icon"></span>
                    <span class="sr-only">Standard Parking Stall Layout pdf</span>
                </a> <a
                        href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-SingleUseSystems-StandardParkingStallLayout.dwg"
                        target="_blank" title="Standard Parking Stall Layout"><span class="dwg_icon"></span>
                    <span class="sr-only">Standard Parking Stall Layout dwg</span>
                </a>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>
    <h4 class="blue-bold">Installation Diagrams</h4>
    <div class="col-container noborder">
        <div class="col noborder">
            <a target="_blank"
               href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Partially-Concealed-System-Detail1.jpg">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Partially-Concealed-System-Detail1-150x150.jpg"
                     alt="Molded Pulp Partially Concealed System Detail"
                     title="Installation Diagrams - Concealed Grasscrete System Grasscrete System" width="150"
                     height="150"></a>
            <div class="col noborder">
                Partially Concealed Grasscrete System
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/MoldedPulpPartiallyConcealedDiagram.pdf"
                   title="Molded Pulp Partially Concealed Diagram" target="_blank"><span class="pdf_icon"></span>
                    <span class="sr-only">Molded Pulp Partially Concealed Diagram pdf</span>
                </a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Concealed-System-Detail.jpg"
               target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Concealed-System-Detail-150x150.jpg"
                     alt="Molded Pulp Concealed System Detail"
                     title="Installation Diagrams - Concealed Grasscrete System Grasscrete System" width="150"
                     height="150"></a>
            <div class="col noborder">
                Concealed Grasscrete System
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/MoldedPulpConcealedDiagram.pdf"
                   title="Molded Pulp Concealed Diagram" target="_blank"><span class="pdf_icon"></span>
                    <span class="sr-only">Molded Pulp Concealed Diagram pdf</span>
                </a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Stone-Filled-System-Detail.jpg"
               target="_blank">
                <img src="/wp-content/uploads/2014/05/Molded-Pulp-Stone-Filled-System-Detail-150x150.jpg"
                     alt="Molded Pulp Stone Filled System Detail"
                     title="Installation Diagrams - Partially Concealed Grasscrete System" width="150" height="150"></a>
            <div class="col noborder">
                Stone Filled Grasscrete System
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/MoldedPulpStoneFilledDiagram.pdf"
                   title="Molded Pulp Stone Filled System" target="_blank"><span class="pdf_icon"></span>
                    <span class="sr-only">Molded Pulp Stone Filled System pdf</span>
                </a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Slope-Protection-Detail.jpg" target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Slope-Protection-Detail-150x150.jpg"
                     alt="Slope Protection Detail"
                     title="Installation Diagrams - Slope Protection Grasscrete System" width="150" height="150"></a>
            <div class="col noborder">
                Slope Protection Grasscrete System
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/MoldedPulpSlopeProtectionDiagram.pdf"
                   title="Slope Protection Detail" target="_blank"><span class="pdf_icon"></span>
                    <span class="sr-only">Slope Protection Detail pdf</span>
                </a></div>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

/** Responsive Column For Products > Grasscrecte table */
add_shortcode('sps-grasscrete-columns', 'create_sps_grasscrete_columns');
/**
 * Responsive Column For Products > Grasscrecte table
 *
 * https://codex.wordpress.org/Function_Reference/site_url
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_sps_grasscrete_columns()
{
    $site_url = site_url();
    ob_start();
    ?>

    <div class="col-container">
        <div class="col threecol">
            <h4>Grasscrete Applications</h4>
            <ul>
                <li>Sustained Access</li>
                <li>Fire and Emergency Access</li>
                <li>Daily Parking</li>
                <li>Over flow Parking</li>
                <li>Roadways</li>
                <li>Medians</li>
                <li>Pedestrian Access</li>
                <li>Water Management</li>
            </ul>
        </div>
        <div class="col threecol">
            <h4>Grasscrete Systems</h4>
            <ul>
                <li>
                    <a href="<?php echo $site_url; ?>/products/grasscrete/productsgrasscretepartially-concealed-grasscrete-system/">Partially
                        Concealed</a></li>
                <li><a href="<?php echo $site_url; ?>/products/grasscrete/concealed-grasscrete-system/">Concealed</a>
                </li>
                <li><a href="<?php echo $site_url; ?>/products/grasscrete/stone-filled-grasscrete-system/">Stone
                        Filled</a></li>
                <li><a href="<?php echo $site_url; ?>/products/grasscrete/slope-protection-grasscrete/">Slope
                        Protection</a></li>
            </ul>
        </div>
        <div class="col threecol">
            <h4>Features and Benefits</h4>
            <ul>
                <li>Load Bearing Capacity stander Installations support 65.000 pounds vehicles</li>
                <li>Suitable for Sustained Traffic.</li>
                <li>Economical- Long Lifecyle</li>
                <li>Environmental - Reduces Heat Island Effect</li>
            </ul>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

/** Responsive Columns For Products > Grasscrete > Installation Process */
add_shortcode('sps-grasscrete-installation-process', 'create_grasscrete_installation_process');
/**
 * Responsive Columns For Products > Grasscrete > Installation Process
 *
 * https://codex.wordpress.org/Function_Reference/site_url
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_grasscrete_installation_process()
{
    $site_url = site_url();
    ob_start();
    ?>

    <div class="row">
        <div class="column-installation"><img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/layer1.jpg"
                                              alt="layer1" width="100%"/>
        </div>
        <div class="column-installation"><img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/layer2.jpg"
                                              alt="layer1" width="100%"/>
        </div>
        <div class="column-installation"><img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/layer3.jpg"
                                              alt="layer1" width="100%"/>
        </div>
        <div class="column-installation"><img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/layer4.jpg"
                                              alt="layer1" width="100%"/>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

/** Responsive Columns For Products > Systems >  Partially Concealed */
add_shortcode('sps-systems-partially-concealed-columns', 'create_systems_partially_concealed_columns');
/**
 * Responsive Columns For Products > Systems >  Parially Concealed
 *
 * https://codex.wordpress.org/Function_Reference/site_url
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_systems_partially_concealed_columns()
{
    $site_url = site_url();
    ob_start();
    ?>

    <div class="col-container">
        <div class="col twocol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Partially-Concealed-System-Detail.jpg"
               target="_blank"><img title="Molded Pulp Partially Concealed System Detail"
                                    src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Partially-Concealed-System-Detail-300x190.jpg"
                                    alt="Molded Pulp Partially Concealed System Detail"/></a>
        </div>
        <div class="col twocol">
            <h4>Common Partially Concealed Applications Include:</h4>
            <ul class="common_concealed">
                <li>Vehicle Parking</li>
                <li>Access Roads</li>
                <li>Road Shoulders</li>
                <li>Driveways</li>
                <li>Fire and Emergency Access</li>
            </ul>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

/** Responsive Columns For Products > Systems > Concealed */
add_shortcode('sps-systems-concealed-columns', 'create_systems_concealed_columns');
/**
 * Responsive Columns For Products > Systems > Concealed
 *
 * https://codex.wordpress.org/Function_Reference/site_url
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_systems_concealed_columns()
{
    $site_url = site_url();
    ob_start();
    ?>

    <div class="col-container">
        <div class="col twocol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Concealed-System-Detail.jpg"
               target="_blank"><img
                        src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Concealed-System-Detail-300x190.jpg"
                        title="Molded Pulp Concealed System Detail" alt="Molded Pulp Concealed System Detail"
                        width="300" height="190"/></a>
        </div>
        <div class="col twocol">
            <h4>Common Concealed Applications Include:</h4>
            <ul>
                <li>Fire and Emergency Access</li>
                <li>Overflow Vehicle Parking</li>
                <li>Low Traffic Access Roads</li>
                <li>Medians</li>
            </ul>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

/** Responsive Columns For Products > Systems > Stone Filled */
add_shortcode('sps-systems-stone-filled', 'create_systems_stone_filled');
/**
 * Responsive Columns For Products > Systems > Stone Filled
 *
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_systems_stone_filled()
{
    $site_url = site_url();
    ob_start();
    ?>

    <div class="col-container">
        <div class="col twocol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Stone-Filled-System-Detail.jpg"
               target="_blank"><img
                        src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Stone-Filled-System-Detail-300x184.jpg"
                        alt="Molded Pulp Stone Filled System Detail" title="Molded Pulp Stone Filled System Detail"
                        width="300" height="184"/></a>
        </div>
        <div class="col twocol">
            <h4>Common Stone Filled Applications Include:</h4>
            <ul class="common_concealed">
                <li>Vehicle Parking</li>
                <li>Access Roads</li>
                <li>Fire and Emergency Access</li>
                <li>Military Installations</li>
            </ul>
        </div>
    </div>


    <?php
    return ob_get_clean();
}

/** Responsive Columns For Products > Systems > Slope Portection */
add_shortcode('sps-systems-slope-protection', 'create_systems_slope_protection');
/**
 * Responsive Columns For Products > Systems > Slope Portection
 *
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_systems_slope_protection()
{
    $site_url = site_url();
    ob_start();
    ?>

    <div class="col-container">
        <div class="col twocol">
            <a target="_blank" href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Slope-Protection-Detail.jpg"><img
                        title="Molded Pulp Slope Protection Detail"
                        src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Slope-Protection-Detail-300x157.jpg"
                        alt="Slope Protection Detail" width="300" height="157"/></a>
        </div>
        <div class="col twocol">
            <h4>Common Slope Protection Applications Include:</h4>
            <ul class="common_concealed">
                <li>Drainage Channels</li>
                <li>Emergency Spillways</li>
                <li>Access Roads and Ramps</li>
                <li>Swales</li>
                <li>Detention/Retention Ponds</li>
            </ul>
        </div>
    </div>


    <?php
    return ob_get_clean();
}

/** Social Bar > Top Bar Widget AND Footer Widget3 */
add_shortcode('sps-social-bar', 'create_social_bar');
/**
 * Social Bar > Top Bar Widget AND Footer Widget3
 *
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_social_bar()
{
    $site_url = site_url();
    ob_start();
    ?>

    <div class="social">
        <div class="socialbar">
            <ul class="social-icons">
                <li class="facebook">
                    <a title="Facebook" href="https://www.facebook.com/Sustainable-Paving-Systems-LLC-454056327941245/" target="_blank" aria-label="Open Facebook in a new tab.">
                        <i class="icon-facebook-fontello" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                </li>
<!--                <li class="gplus">-->
<!--                    <a title='Google+" href="https://plus.google.com/118258393594663841545#118258393594663841545/about" target="_blank">-->
<!--                        <i class="icon-gplus"></i>-->
<!--                    </a>-->
<!--                </li>-->
                <li class="houzz">
                    <a title="Houzz" href="https://www.houzz.com/pro/webuser-585923094/sustainable-paving-systems-llc" target="_blank" aria-label="Open Houzz in another tab.">
                        <i class="icon-houzz-fontello" aria-hidden="true"></i>
                        <span class="sr-only">Houzz</span>
                    </a>
                </li>
                <li class="linkedin">
                    <a title="LinkedIn" href="https://www.linkedin.com/company/sustainable-paving-systems" target="_blank" aria-label="Open LinkedIn in another tab.">
                        <i class="icon-linkedin-fontello" aria-hidden="true"></i>
                        <span class="sr-only">LinkedIn</span>
                    </a>
                </li>
                <li class="pinterest">
                    <a title="Pinterest" href="http://www.pinterest.com/SPSGrasscrete/" target="_blank" aria-label="Open Pinterest in another tab.">
                        <i class="icon-pinterest-fontello" aria-hidden="true"></i>
                        <span class="sr-only">Pinterest</span>
                    </a>
                </li>
                <li class="twitter">
                    <a title="Twitter" href="https://twitter.com/SPSGrasscrete" target="_blank" aria-label="Open Twitter in another tab.">
                        <i class="icon-twitter-fontello" aria-hidden="true"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                </li>
                <li class="vimeo">
                    <a title="YouTube" href="http://www.youtube.com/channel/UCSiJSqcMDffyPXgLEbD_XQg" target="_blank" aria-label="Open YouTube in another tab.">
                        <i class="icon-youtube-fontello" aria-hidden="true"></i>
                        <span class="sr-only">YouTube</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

/** Responsive Columns For AutoCad Patterns */
add_shortcode('sps-autocad-patterns-columns', 'create_sps_autocad_patterns_columns');
/**
 * Responsive Columns For AutoCad Patterns
 *
 * https://codex.wordpress.org/Function_Reference/site_url
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_sps_autocad_patterns_columns()
{
    $site_url = site_url();
    ob_start();
    ?>

    <h4 class="blue-bold">Molded Pulp Former AutoCad Drawings</h4>
    <div class="col-container noborder">
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Molded-Pulp-Former-System-Void-Grassed.jpg"
               title="SPS Grasscrete Molded Pulp Former System - Void Grassed" target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Molded-Pulp-Former-System-Void-Grassed-150x150.jpg"
                     alt="SPS Grasscrete Molded Pulp Former System - Void Grassed"
                     title="SPS Grasscrete Molded Pulp Former System - Void Grassed" width="150" height="150"></a>
            <div class="col noborder">
                Partially Concealed
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Molded-Pulp-Former-System-Void-Grassed.pdf"
                   title="SPS Grasscrete Molded Pulp Former System - Void Grassed" target="_blank"><span
                            class="pdf_icon"></span></a> <a
                        href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-Grasscrete-Molded-Pulp-Former-System-Void-Grassed.dwg"
                        title="SPS Grasscrete Molded Pulp Former System - Void Grassed" target="_blank"><span
                            class="dwg_icon"></span></a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/concealed.png" target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/concealed-150x150.png" alt="concealed"
                     title="Molded Pulp Former AutoCad Drawings - Partially Concealed" width="150" height="150"></a>
            <div class="col noborder">
                Concealed
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Molded-Pulp-Former-System-Fully-Grassed.pdf"
                   title="SPS Grasscrete Molded Pulp Former System Fully Grassed" target="_blank"><span
                            class="pdf_icon"></span></a> <a
                        href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-Grasscrete- Molded-Pulp-Former-System - Fully-Grassed.dwg"
                        title="SPS Grasscrete Molded Pulp Former System Fully Grassed" target="_blank"><span
                            class="dwg_icon"></span></a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/stone-filled.png" target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/stone-filled-150x150.png"
                     alt="stone filled"
                     title="Molded Pulp Former AutoCad Drawings - Stone Filled" width="150" height="150"></a>
            <div class="col noborder">
                Stone Filled
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Molded-Pulp-Former-System-Stone-Filled.pdf"
                   title="SPS Grasscrete Molded Pulp Former System Stone Filled" target="_blank"><span
                            class="pdf_icon"></span></a> <a
                        href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-Grasscrete-Molded-Pulp-FormerSystem-Stone-Filled.dwg"
                        title="SPS Grasscrete Molded Pulp Former System Stone Filled" target="_blank"><span
                            class="dwg_icon"></span></a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grascrete-Molded-Pulp-Former-System-Part-Plan.jpg"
               target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grascrete-Molded-Pulp-Former-System-Part-Plan-150x150.jpg"
                     alt="SPS Grascrete Molded Pulp Former System - Part Plan"
                     title="SPS Grascrete Molded Pulp Former System - Part Plan" width="150" height="150"></a>
            <div class="col noborder">
                Part Plan
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grascrete-Molded-Pulp-Former-System-Part-Plan.pdf"
                   target="_blank"><span class="pdf_icon"></span></a> <a
                        href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-Grasscrete-Molded-Pulp-System-Part-Plan.dwg"
                        target="_blank" title="SPS Grascrete Molded Pulp Former System - Part Plan"><span
                            class="dwg_icon"></span></a>
            </div>
        </div>
    </div>


    <?php
    return ob_get_clean();
}

/** Responsible Columns For Installation Diagrams */
add_shortcode('sps-installation-diagrams-columns', 'create_sps_installation_diagrams_columns');
/**
 * Responsive Columns For AutoCad Patterns
 *
 * https://codex.wordpress.org/Function_Reference/site_url
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_sps_installation_diagrams_columns()
{
    $site_url = site_url();
    ob_start();
    ?>

    <h4 class="blue-bold">Installation Diagrams</h4>
    <div class="col-container noborder">
        <div class="col noborder">
            <a target="_blank"
               href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Partially-Concealed-System-Detail1.jpg">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Partially-Concealed-System-Detail1-150x150.jpg"
                     alt="Molded Pulp Partially Concealed System Detail"
                     title="Installation Diagrams - Concealed Grasscrete System Grasscrete System" width="150"
                     height="150"></a>
            <div class="col noborder">
                Partially Concealed Grasscrete System
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/MoldedPulpPartiallyConcealedDiagram.pdf"
                   title="Molded Pulp Partially Concealed Diagram" target="_blank"><span class="pdf_icon"></span></a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Concealed-System-Detail.jpg"
               target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Concealed-System-Detail-150x150.jpg"
                     alt="Molded Pulp Concealed System Detail"
                     title="Installation Diagrams - Concealed Grasscrete System Grasscrete System" width="150"
                     height="150"></a>
            <div class="col noborder">
                Concealed Grasscrete System
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/MoldedPulpConcealedDiagram.pdf"
                   title="Molded Pulp Concealed Diagram" target="_blank"><span class="pdf_icon"></span></a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Molded-Pulp-Stone-Filled-System-Detail.jpg"
               target="_blank">
                <img src="/wp-content/uploads/2014/05/Molded-Pulp-Stone-Filled-System-Detail-150x150.jpg"
                     alt="Molded Pulp Stone Filled System Detail"
                     title="Installation Diagrams - Partially Concealed Grasscrete System" width="150" height="150"></a>
            <div class="col noborder">
                Stone Filled Grasscrete System
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/MoldedPulpStoneFilledDiagram.pdf"
                   title="Molded Pulp Stone Filled System" target="_blank"><span class="pdf_icon"></span></a>
            </div>
        </div>
        <div class="col noborder">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Slope-Protection-Detail.jpg" target="_blank">
                <img src="<?php echo $site_url; ?>/wp-content/uploads/2014/05/Slope-Protection-Detail-150x150.jpg"
                     alt="Slope Protection Detail"
                     title="Installation Diagrams - Slope Protection Grasscrete System" width="150" height="150"></a>
            <div class="col noborder">
                Slope Protection Grasscrete System
                <br>
                <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/MoldedPulpSlopeProtectionDiagram.pdf"
                   title="Slope Protection Detail" target="_blank"><span class="pdf_icon"></span></a></div>
        </div>
    </div>

    <h4 class="blue-bold">Other Installation Diagrams files List below</h4>
    <div class="col-container bordertable">
        <div class="col noborder twocol colname">
            File Name
        </div>
        <div class="col noborder twocol colname">
            Download
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Plastic Former
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Styrene-Former-GC2-System-Grassed-Voids.pdf"
               target="_blank"><span class="pdf_icon"></span></a>
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-Grasscrete-Styrene-Former-GC2-System-Grassed-Voids.dwg"
               target="_blank"><span class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Grasscrete Plastic Former System Fully Grassed
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/05/SPS-Grasscrete-Styrene-Former-GC2-System-Fully-Grassed.pdf"
               target="_blank"><span class="pdf_icon"></span></a>
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/SPS-Grasscrete-Styrene-Former-GC2-Fully-Grassed-System.dwg"
               target="_blank"><span class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC1 with Access Ducts
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC1-with-Access-Ducts.dwg"
               target="_blank"><span class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC1 with Kerbs
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC1-with-Kerbs.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC2 with Access Ducts
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC2withAccessDucts.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC2 with Kerbs
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC2withKerbs.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC3 with Access Ducts
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC3withAccessDucts.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC3 with Kerbs
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC3withKerbs.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC-A193-GC1-002
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC-A193-GC1-002.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC-A193-GC3-001
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC-A193-GC3-001.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC-A252-GC1-003
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC-A252-GC1-003.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC-A252-GC2-004
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC-A252-GC2-004.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            GC-A393-GC2-005
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GC-A393-GC2-005.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Grasscrete CAD Fire Access Details
        </div>
        <div class="col noborder twocol nopadcol">
            <span class="dwg_icon"></span>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Grasscrete GC1A193 Section
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GrasscreteGC1A193Section.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Grasscrete GC1A252 Section
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GrasscreteGC1A252Section.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Grasscrete GC2A393 Section
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GrasscreteGC2A393Section.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Grasscrete GC3A142 Section
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GrasscreteGC3A142Section.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Grasscrete GC3A193 Section
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GrasscreteGC3A193Section.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Grasscrete Parking Details
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/GrasscreteParkingDetails.dwg" target="_blank"><span
                        class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Grasscrete structrural continutity
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/dwg/Grasscretestructruralcontinutity.dwg"
               target="_blank"><span class="dwg_icon"></span></a>
        </div>
    </div>
    <div class="col-container bordertable">
        <div class="col noborder twocol nopadcol">
            Grasscrete Water Environment Details CAD
        </div>
        <div class="col noborder twocol nopadcol">
            <a href="<?php echo $site_url; ?>/uploads/2014/dwg/GrasscreteWaterEnvironmentDetailsCAD.dwg"
               target="_blank"><span class="dwg_icon"></span></a>
        </div>
    </div>


    <!--    <div class="col-container bordertable">-->
    <!--        <div class="col noborder twocol nopadcol">-->
    <!---->
    <!--        </div>-->
    <!--        <div class="col noborder twocol nopadcol">-->
    <!--            <a href="--><?php //echo $site_url;
    ?><!--/path" target="_blank"><span class="dwg_icon"></span></a>-->
    <!--        </div>-->
    <!--    </div>-->


    <?php
    return ob_get_clean();
}

/** Responsive Columns for Products Page  */
add_shortcode('sps-products-columns', 'create_sps_products_columns');
/**
 * Responsive Columns For Products Page
 *
 * https://codex.wordpress.org/Function_Reference/site_url
 * $site_url = site_url();
 * <?php echo $site_url; ?>
 *
 * @return string
 */
function create_sps_products_columns()
{
    $site_url = site_url();
    ob_start();
    ?>

    <div class="col-container">
        <div class="col threecol">
            <h4>Features and Benefits:</h4>
            <ul>
                <li>Load Bearing Capacity</li>
                <li>standard installations support</li>
                <li>65,000 pound vehicles</li>
                <li>Suitable for Sustained Traffic</li>
                <li>Economical – Long Lifecyle</li>
                <li>Environmental - Reduces Heat Island Effec</li>
            </ul>
        </div>
        <div class="col threecol">
            <h4>Specification Guidelines:</h4>
            <ul>
                <li>
                    <a href="<?php echo $site_url; ?>/wp-content/uploads/2018/06/SPS-Grasscrete-MoldedPulp_StoneFilledSystem_Guideline-Specification.doc"
                       target="_blank" rel="noopener">Molded Pulp Form Stone Filled Grasscrete System</a></li>
                <li>
                    <a href="<?php echo $site_url; ?>/wp-content/uploads/2018/06/SPS-Grasscrete-MoldedPulp_ConcealedSystemforEmergencyAccessApplications_Guideline-Specification.doc"
                       target="_blank" rel="noopener">Molded Pulp Form Concealed Grasscrete System for Emergency Access
                        Applications</a></li>
                <li>
                    <a href="<?php echo $site_url; ?>/wp-content/uploads/2018/06/SPS-Grasscrete-MoldedPulp_PartiallyConcealedSystemforParkingApplicationsorSustainedAccess_Guideline-Spec.doc"
                       target="_blank" rel="noopener">Molded Pulp Form Partially Concealed Grasscrete System for Parking
                        Applications and Sustained Access</a></li>
                <li>
                    <a href="<?php echo $site_url; ?>/wp-content/uploads/2018/06/SPS-Grasscrete-MoldedPulp_PartiallyConcealedSystemforSlopedApplications_Guideline-Specification.doc"
                       target="_blank" rel="noopener">Molded Pulp Form Partially Concealed Grasscrete System for Sloped
                        Applications</a></li>
            </ul>
        </div>
        <div class="col threecol">
            <h4>Resources:</h4>
            <ul>
                <li><a href="<?php echo $site_url; ?>/wp-content/uploads/2014/04/Grasscrete-Brochure-2013.pdf"
                       target="_blank" rel="noopener">Grasscrete Brochure</a></li>
                <li>
                    <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/04/SPS-Molded-Pulp-Former-Technical-Bulletin_0813.pdf"
                       target="_blank" rel="noopener">Technical Bulletin</a></li>
                <li><a href="<?php echo $site_url; ?>/products/grasscrete/" target="_blank" rel="noopener">AutoCad
                        Patterns</a></li>
                <li>
                    <a href="<?php echo $site_url; ?>/wp-content/uploads/2014/04/SPS-Grasscrete-Systems-LEED-Guide_August2013.pdf"
                       target="_blank" rel="noopener">LEED Guide</a></li>
                <li><a href="<?php echo $site_url; ?>/faqs/" target="_blank" rel="noopener">Frequently Asked
                        Questions</a></li>
            </ul>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

/** Fire on the Front-End for both Visitors and Logged-in Users */
add_action('wp_ajax_display_gallery_by_category', 'display_gallery_by_category');
add_action('wp_ajax_nopriv_display_gallery_by_category', 'display_gallery_by_category');
/**
 * Display the Filtered Gallery from an Ajax call
 *
 * https://codex.wordpress.org/AJAX_in_Plugins
 */
function display_gallery_by_category()
{
    $gallery_type = $_POST['gallery_type'];
    $category = $_POST['category'];
    $output = '';
    $gallery = [];

    switch ($gallery_type) {
        case 'Showroom':
            $gallery = create_showroom_gallery();
            break;
        case 'Profiles':
            $gallery = create_profiles_gallery();
            break;
    }
    // filter the Gallery
    $gallery = filter_gallery_by_category($gallery, $category);

    $output .= create_filtered_gallery_html($gallery, 3);

//	echo do_shortcode('[foogallery id="4253"]');
    echo $output;
    // This is Required to terminate immediately and return a proper response
    wp_die();
}




/** Shortcode for Responsive Columns for both Gallery Page or Project Profiles Gallery Page - use Attribute  */
add_shortcode('ramona-create-gallery', 'create_ramona_gallery');
/**
 * Responsive Columns for both Gallery Page and Project Profiles Gallery Page
 *
 *Sorting Arrays
 * http://php.net/manual/en/array.sorting.php
 *
 * wp-content/plugins/foogallery/includes/functions.php
 * Line 271
 * foogallery_get_all_galleries( $excludes = false )   returns FooGallery[] array of FooGallery galleries
 *
 * @param array $atts
 * @param null $content
 * @param string $tag
 * @return string
 */
function create_ramona_gallery($atts = [], $content = null, $tag = '')
{
    $output = '';
    $ramona_gallery_type = '';
    $galleries = foogallery_get_all_galleries($excludes = false);
    $filteredGalleries = array();

    /** normalize attribute keys, lowercase */
    $atts = array_change_key_case((array)$atts, CASE_LOWER);

    /** override default attributes with user attributes */
    $ramona_gallery_atts = shortcode_atts([
        'type' => '',
    ], $atts, $tag);

    /** DEFAULT type is EMPTY STRING */
    if ($ramona_gallery_atts["type"] === "gallery") {
        $ramona_gallery_type = 'gallery';
    } else if ($ramona_gallery_atts["type"] === "profile") {
        $ramona_gallery_type = 'profile';
    }

    if ($ramona_gallery_type != '') {
        foreach ($galleries as $gallery) {
            /** From the wp_posts table */
            $foogallery = FooGallery::get_by_id($gallery->ID);
            $sps_gallery_type = $foogallery->get_setting('sps_gallery_type', '');
            /** filter out draft galleries > post_status=='draft' */
            if (($sps_gallery_type === $ramona_gallery_type) && ($foogallery->post_status == 'publish')) {
                $filteredGalleries[] = $foogallery;
            }
        }

        if (count($filteredGalleries) > 0) {
            /** ORDER BY lowest Gallery ID first - Reverse the order retrieved  */
//            $filteredGalleries = array_reverse($filteredGalleries);
            $output .= create_ramona_gallery_html($filteredGalleries);
            /** create Ajax Container around $output so JavaScript SideBar filtering doesn't BOMB on scroll animation!! */
            $output = '<div id="ajax-result-container">' . $output . '</div>';
        }
    }

    return $output;
}

/**
 * Create HTML for both Gallery Page and for Project Profiles Gallery Page
 *
 * galleries are filtered when this function is called
 *
 * @param $galleries
 * @return string
 */
function create_ramona_gallery_html($galleries)
{
    $output = '';
    $result = '';
    $columns = 3;
    $colclass = 'threecol';
    $class = '';
    $link = '';

    for ($i = 0, $size = count($galleries); $i < $size; ++$i) {
        if ($i == 0 || ($i >= $columns && $i % $columns == 0)) {
            $result .= '<div class="col-container noborder">';
        }
        $foogallery = FooGallery::get_by_id($galleries[$i]->ID);
        $keys = array('sps_gallery_project_class', 'sps_gallery_type_class', 'sps_gallery_system_class');
        foreach ($keys as $key){
            $classes = $foogallery->get_setting($key, '');
            if (!empty($classes)) {
                foreach ($classes as $value) {
                    $class .= $value . ' ';
                }
            }
        }
        $class = rtrim($class);
        $link .= $foogallery->get_setting('sps_gallery_link', '') !== '' ? $foogallery->get_setting('sps_gallery_link', '') : 'javascript:void(0)';
        $gallery_type = $foogallery->get_setting('sps_gallery_type', '');

        $result .= '<div class="col noborder ' . $colclass . ' ' . $class . '">';
        $result .= do_shortcode($foogallery->shortcode());
        $result .= '<div class="project-link">';
        if ($gallery_type === 'gallery') {
            //        $result .= '<a href="' . $link . '">' . $foogallery->name . ' ' . $foogallery->ID . '</a>';
            $result .= '<a href="' . $link . '">' . $foogallery->name . '</a>';
        } elseif ($gallery_type === 'profile') {
            //        $result .= '<a href="' . $link . '">' . $foogallery->name . ' ' . $foogallery->ID . '</a>';
            $result .= '<a href="' . $link . '">' . substr($foogallery->name, 9) . '</a>'; // Remove Profile- and space
        }
        $result .= '</div>';
        $result .= '</div>';
        if ($i == $size - 1) {
            // Determine how many Blank Cells to add
            if ($columns == 3) {
                if ($i % $columns == 0) {
                    $result .= '<div class="col noborder ' . $colclass . '">';
                    $result .= '<div class="project-link">';
                    $result .= '</div>';
                    $result .= '</div>';
                    $result .= '<div class="col noborder ' . $colclass . '">';
                    $result .= '<div class="project-link">';
                    $result .= '</div>';
                    $result .= '</div>';
                } else if ($i % $columns == 1) {
                    $result .= '<div class="col noborder ' . $colclass . '">';
                    $result .= '<div class="project-link">';
                    $result .= '</div>';
                    $result .= '</div>';
                }
            }
        }
        /** This closes the row for <div class="col-container noborder"> every third div */
        if (($i == ($columns - 1) && $size > $columns) || ($i > $columns && $i % $columns == ($columns - 1)) && $i < ($size - 1)) {
//            $result .= ' here size:' . $size . '</div>';
            $result .= '</div>';
        }

        $output .= $result;
        $result = '';
        $class = '';
        $link = '';

    }
    $output .= '</div>';

    return $output;
}

