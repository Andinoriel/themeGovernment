import {appMakeBeCool} from "@js/app/lib/site";

import '@js/app/lib/site.js'
import '@js/app/lib/siteMode.js'
import '@js/app/mode/themeMode.js'
import '@js/app/modules/mainSlider.js'
import '@js/app/modules/menuAligns.js'
import '@js/app/modules/bgStretch.js'
import '@js/app/modules/eventAnimate.js'
import '@js/app/modules/stuffSlider.js'
import '@js/app/modules/gridsDiagramms.js'
import '@js/app/modules/barChart.js'
import '@js/app/modules/disquis.js'
import '@js/app/modules/stickyHeader.js'
import '@js/app/modules/globalScripts.js'
import '@js/app/modules/parallax.js'
import '@js/app/modules/backgroundImg.js'
import '@js/app/modules/scrollPlugin.js'
import '@js/app/modules/googleMap.js'
import '@js/app/modules/eventSlider.js'
import '@js/app/modules/stuffPage.js'
import '@js/app/modules/aboutDiagramms.js'
import '@js/app/modules/sharrre.js'
import '@js/app/modules/dtMenu.js'
import '@js/app/modules/formSubscribe.js'
import '@js/app/modules/formFieldsSubscribe.js'

$(function(){
    // if(global.cultureKey != 'en') {
    //     downloadJSAtOnload(designUrl+'js/jquery/plugins/validation/localization/messages_'+global.cultureKey+'.js');
    // }
    "use strict";
    appMakeBeCool.gateway.init();
});
