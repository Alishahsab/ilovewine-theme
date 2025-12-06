<?php
/**
 * The Header for I Love Wine Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Tailwind CSS CDN -->
<!-- <script src="https://cdn.tailwindcss.com"></script> -->

<?php wp_head(); ?>
 
</head>

<body <?php body_class(); ?>>

  <!-- ========== HEADER ========== -->
    <header class="fixed top-0 left-0 right-0 z-50 glass border-b border-wine-100/50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="/" class="flex-shrink-0" aria-label="I Love Wine Home">
                    <img src="https://ilovewine.com/wp-content/uploads/2024/06/imgpsh_fullsize_anim-27.png" 
                         alt="I Love Wine" 
                         class="h-12 w-auto"
                         width="180" height="48">
                </a>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1">
                    <!-- Experiences (CTA) -->
                    <div class="nav-item relative">
                        <a href="https://experiences.ilovewine.com/" 
                           class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-white bg-wine-700 rounded-full hover:bg-wine-800 transition-colors">
                            <span>Experiences</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Mega Menu -->
                        <div class="mega-menu absolute top-full left-0 pt-4 w-[800px]">
    <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-8 grid grid-cols-4 gap-8">
        <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">BY INTEREST</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=wine+tastings" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Wine Tastings</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Vineyard+Tours" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Vineyard Tours</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Food+Tours" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Food Tours</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Classes" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Classes & Workshops</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Mixology" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Mixology & Cocktail</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Brewery" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Brewery & Distillery</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">BY DESTINATION</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Napa+Valley" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Napa Valley</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Sonoma" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Sonoma</a></li>
                <li><a href="https://experiences.ilovewine.com/Santa-Barbara/d4372-ttd?_gl=1*1jy3dah*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.219183070.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Santa Barbara</a></li>
                <li><a href="https://experiences.ilovewine.com/Paso-Robles/d24369-ttd?_gl=1*zh52zs*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.208173013.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Paso Robles</a></li>
                <li><a href="https://experiences.ilovewine.com/Willamette-Valley/d51920-ttd?_gl=1*zh52zs*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.208173013.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Willamette Valley</a></li>
                <li><a href="https://experiences.ilovewine.com/Tuscany/d206-ttd?_gl=1*1jtqjad*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.250149825.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Tuscany</a></li>
                <li><a href="https://experiences.ilovewine.com/Bordeaux/d468-ttd?_gl=1*1jtqjad*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.250149825.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Bordeaux</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">BY OCCASION</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Date+Night" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Date Night</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Groups" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Groups & Parties</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Corporate" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Corporate & Team</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Honeymoon" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Honeymoon & Romance</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Family+Friendly" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Family-Friendly</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">QUICK LINKS</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Last+Minute" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Last-Minute</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Deals" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Deals</a></li>
            </ul>
        </div>
    </div>
</div>
                    </div>
                    
                    <!-- Destinations -->
                    <div class="nav-item relative">
                        <a href="/destinations/" class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-gray-700 hover:text-wine-700 transition-colors">
                            <span>Destinations</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Mega Menu -->
                        <div class="mega-menu absolute top-full left-0 pt-4 w-[700px]">
                          <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-8 grid grid-cols-4 gap-8">
                            <div>
                             <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">U.S. WINE REGIONS</h3>
                              <ul class="space-y-3">
                 <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Napa+Valley" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Napa Valley</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Sonoma" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Sonoma</a></li>
                <li><a href="http://experiences.ilovewine.com/Santa-Barbara/d4372-ttd?_gl=1*18mjq8f*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.18776062.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Santa Barbara</a></li>
                <li><a href="https://experiences.ilovewine.com/Paso-Robles/d24369-ttd?_gl=1*18mjq8f*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.18776062.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Paso Robles</a></li>
                <li><a href="https://experiences.ilovewine.com/Willamette-Valley/d51920-ttd?_gl=1*18mjq8f*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.18776062.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Willamette Valley</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Finger+Lakes" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Finger Lakes</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Walla+Walla" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Walla Walla</a></li>
                                 </ul>
                         </div>
                                <div>
            <div class="mb-8">
                <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">INTERNATIONAL</h3>
                <ul class="space-y-3">
                    <li><a href="https://experiences.ilovewine.com/Tuscany/d206-ttd?_gl=1*68e0r8*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.223433948.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Tuscany</a></li>
                    <li><a href="https://experiences.ilovewine.com/Bordeaux/d468-ttd?_gl=1*68e0r8*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.223433948.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Bordeaux</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Rioja" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Rioja</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Douro" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Douro</a></li>
                    <li><a href="https://experiences.ilovewine.com/Santorini/d959-ttd?_gl=1*6cqut4*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.43585762.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Santorini</a></li>
                    <li><a href="https://experiences.ilovewine.com/Mendoza/d931-ttd?_gl=1*68e0r8*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.223433948.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Mendoza</a></li>
                </ul>
            </div>
           
        </div>
          <div>
                <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">TRIP TOOLS</h3>
                <ul class="space-y-3">
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Best+Time+to+Go" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Best Time to Go</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=3Day+Itineraries" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">3-Day Itineraries</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Maps" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Maps</a></li>
                </ul>
            </div>
        <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">CITY GUIDES</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=San+Francisco" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">San Francisco</a></li>
                <li><a href="https://experiences.ilovewine.com/Los-Angeles/d645-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Los Angeles</a></li>
                <li><a href="https://experiences.ilovewine.com/San-Diego/d736-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">San Diego</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Portland" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Portland</a></li>
                <li><a href="https://experiences.ilovewine.com/Seattle/d704-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Seattle</a></li>
                <li><a href="https://experiences.ilovewine.com/New-York-City/d687-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">New York City</a></li>
            </ul>
        </div>
    </div>
</div>
                    </div>
                    <!-- //////////////////////////////// -->


<!-- Destinations -->
               <div class="nav-item relative">
    <a href="/wines" class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-gray-700 hover:text-wine-700 transition-colors">
        <span>Wine Guides</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </a>
    <!-- Mega Menu -->
    <div class="mega-menu absolute top-full left-0 pt-4 w-[700px]">
        <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-8 grid grid-cols-4 gap-8">
            <div>
                <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">START HERE</h3>
                <ul class="space-y-3">
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Wine+101&_gl=1*wxfzla*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.18437758.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Wine 101</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Serving" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Serving & Temperature</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">VARIETALS A–Z</h3>
                <ul class="space-y-3">
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Cabernet+Sauvignon" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Cabernet Sauvignon</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Pinot+Noir" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Pinot Noir</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Chardonnay" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Chardonnay</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Sauvignon+Blanc" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Sauvignon Blanc</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Syrah+Shiraz" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Syrah/Shiraz</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=rose" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Rosé</a></li>
                </ul>
            </div>
            <div>
                <div class="mb-8">
                    <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">REGIONS</h3>
                    <ul class="space-y-3">
                        <li><a href="https://experiences.ilovewine.com/France/d51-ttd?_gl=1*1jvq4y2*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.52844527.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">France</a></li>
                        <li><a href="https://experiences.ilovewine.com/Italy/d57-ttd?_gl=1*1jvq4y2*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.52844527.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Italy</a></li>
                        <li><a href="https://experiences.ilovewine.com/Spain/d67-ttd?_gl=1*1jvq4y2*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.52844527.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Spain</a></li>
                        <li><a href="https://experiences.ilovewine.com/USA-tours/Half-day-Tours/d77-g12-c95?_gl=1*1jvq4y2*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.52844527.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">U.S.A.</a></li>
                        <li><a href="https://experiences.ilovewine.com/Portugal/d63-ttd?_gl=1*1jvq4y2*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.52844527.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Portugal</a></li>
                        <li><a href="https://experiences.ilovewine.com/New-Zealand/d24-ttd?_gl=1*1jvq4y2*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.52844527.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">New Zealand</a></li>
                    </ul>
                </div>
                 
            </div>
            <div>
                    <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">CELLARING & GEAR</h3>
                    <ul class="space-y-3">
                        <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Buying+&_gl=1*zgbexd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.244725698.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Buying & Cellaring</a></li>
                        <li><a href="https://experiences.ilovewine.com/searchResults/all?text=wine+Glassware" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Glassware</a></li>
                        <li><a href="https://experiences.ilovewine.com/searchResults/all?text=wine+storage" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Storage</a></li>
                        <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Sparkling" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Sparkling & Champagne</a></li>
                    </ul>
                </div>
        </div>
    </div>
</div>


                    <!-- //////////////////////////////////////// -->
                    <!-- <a href="/wine/" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-wine-700 transition-colors">Wine Guides</a> -->
                    <a href="food-and-wine-pairing" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-wine-700 transition-colors">Food & Pairings</a>
                    <a href="/category/travel/" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-wine-700 transition-colors">Travel</a>
                    <a href="/category/events/" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-wine-700 transition-colors">Events</a>
                    
                    <!-- Free Guide CTA -->
                    <a href="/food-and-wine-pairing/" class="ml-4 px-5 py-2.5 text-sm font-semibold text-wine-700 border-2 border-wine-700 rounded-full hover:bg-wine-700 hover:text-white transition-all">
                        Free Pairing Guide
                    </a>
                </div>
                
                <!-- Search & Mobile Menu -->
                <div class="flex items-center gap-4">
                    <button id="searchBtn" class="p-2 text-gray-600 hover:text-wine-700 transition-colors" aria-label="Search">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    
                    <button id="mobileMenuBtn" class="lg:hidden p-2 text-gray-600 hover:text-wine-700 transition-colors" aria-label="Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Search Overlay -->
    <div id="searchOverlay" class="fixed inset-0 z-50 bg-black/50 backdrop-blur-sm hidden">
        <div class="flex items-start justify-center pt-32 px-4">
            <div class="w-full max-w-2xl bg-white rounded-2xl shadow-2xl p-6 animate-slide-down">
                <form action="/" method="get" class="relative">
                    <input type="search" name="s" placeholder="Search wine, food, travel..." 
                           class="w-full px-6 py-4 text-lg border-2 border-gray-200 rounded-xl focus:border-wine-500 focus:ring-4 focus:ring-wine-100 outline-none transition-all">
                    <button type="submit" class="absolute right-4 top-[39%] -translate-y-1/2 p-2 text-wine-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
                <button id="closeSearch" class="mt-4 text-sm text-gray-500 hover:text-wine-700">Press ESC to close</button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="fixed inset-0 z-50 bg-white transform translate-x-full transition-transform duration-300 lg:hidden">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b">
                <img src="https://ilovewine.com/wp-content/uploads/2024/06/imgpsh_fullsize_anim-27.png" alt="I Love Wine" class="h-10">
                <button id="closeMobileMenu" class="p-2 text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <nav class="flex-1 overflow-y-auto p-6">
                <ul class="space-y-4">
                    <!-- Experiences with Mega Menu -->
                    <li class="mobile-nav-item">
                        <button class="mobile-nav-toggle flex items-center justify-between w-full py-3 text-lg font-semibold text-wine-700">
                            <span>Experiences</span>
                            <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Mobile Mega Menu -->
                        <div class="mobile-mega-menu hidden pl-4 mt-2 space-y-6">
                            <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">BY INTEREST</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=wine+tastings" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Wine Tastings</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Vineyard+Tours" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Vineyard Tours</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Food+Tours" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Food Tours</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Classes" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Classes & Workshops</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Mixology" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Mixology & Cocktail</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Brewery" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Brewery & Distillery</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">BY DESTINATION</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Napa+Valley" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Napa Valley</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Sonoma" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Sonoma</a></li>
                <li><a href="https://experiences.ilovewine.com/Santa-Barbara/d4372-ttd?_gl=1*1jy3dah*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.219183070.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Santa Barbara</a></li>
                <li><a href="https://experiences.ilovewine.com/Paso-Robles/d24369-ttd?_gl=1*zh52zs*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.208173013.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Paso Robles</a></li>
                <li><a href="https://experiences.ilovewine.com/Willamette-Valley/d51920-ttd?_gl=1*zh52zs*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.208173013.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Willamette Valley</a></li>
                <li><a href="https://experiences.ilovewine.com/Tuscany/d206-ttd?_gl=1*1jtqjad*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.250149825.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Tuscany</a></li>
                <li><a href="https://experiences.ilovewine.com/Bordeaux/d468-ttd?_gl=1*1jtqjad*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.250149825.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Bordeaux</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">BY OCCASION</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Date+Night" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Date Night</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Groups" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Groups & Parties</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Corporate" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Corporate & Team</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Honeymoon" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Honeymoon & Romance</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Family+Friendly" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Family-Friendly</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">QUICK LINKS</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Last+Minute" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Last-Minute</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Deals" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Deals</a></li>
            </ul>
        </div>
                            <!-- Main CTA Button for Mobile -->
                            <div class="pt-4">
                                <a href="https://experiences.ilovewine.com/" class="block w-full py-3 text-center text-sm font-semibold text-white bg-wine-700 rounded-full hover:bg-wine-800 transition-colors">
                                    View All Experiences
                                </a>
                            </div>
                        </div>
                    </li>
                    
                    <!-- Destinations with Mega Menu -->
                    <li class="mobile-nav-item">
                        <button class="mobile-nav-toggle flex items-center justify-between w-full py-3 text-lg font-medium text-gray-800">
                            <span>Destinations</span>
                            <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Mobile Mega Menu -->
                        <div class="mobile-mega-menu hidden pl-4 mt-2 space-y-6">
                            <div>
                             <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">U.S. WINE REGIONS</h3>
                              <ul class="space-y-3">
                 <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Napa+Valley" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Napa Valley</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Sonoma" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Sonoma</a></li>
                <li><a href="http://experiences.ilovewine.com/Santa-Barbara/d4372-ttd?_gl=1*18mjq8f*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.18776062.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Santa Barbara</a></li>
                <li><a href="https://experiences.ilovewine.com/Paso-Robles/d24369-ttd?_gl=1*18mjq8f*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.18776062.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Paso Robles</a></li>
                <li><a href="https://experiences.ilovewine.com/Willamette-Valley/d51920-ttd?_gl=1*18mjq8f*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.18776062.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Willamette Valley</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Finger+Lakes" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Finger Lakes</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Walla+Walla" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Walla Walla</a></li>
                                 </ul>
                         </div>
                                <div>
            <div class="mb-8">
                <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">INTERNATIONAL</h3>
                <ul class="space-y-3">
                    <li><a href="https://experiences.ilovewine.com/Tuscany/d206-ttd?_gl=1*68e0r8*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.223433948.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Tuscany</a></li>
                    <li><a href="https://experiences.ilovewine.com/Bordeaux/d468-ttd?_gl=1*68e0r8*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.223433948.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Bordeaux</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Rioja" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Rioja</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Douro" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Douro</a></li>
                    <li><a href="https://experiences.ilovewine.com/Santorini/d959-ttd?_gl=1*6cqut4*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.43585762.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Santorini</a></li>
                    <li><a href="https://experiences.ilovewine.com/Mendoza/d931-ttd?_gl=1*68e0r8*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.223433948.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Mendoza</a></li>
                </ul>
            </div>
           
        </div>
          <div>
                <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">TRIP TOOLS</h3>
                <ul class="space-y-3">
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Best+Time+to+Go" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Best Time to Go</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=3Day+Itineraries" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">3-Day Itineraries</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Maps" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Maps</a></li>
                </ul>
            </div>
        <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">CITY GUIDES</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=San+Francisco" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">San Francisco</a></li>
                <li><a href="https://experiences.ilovewine.com/Los-Angeles/d645-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Los Angeles</a></li>
                <li><a href="https://experiences.ilovewine.com/San-Diego/d736-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">San Diego</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Portland" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Portland</a></li>
                <li><a href="https://experiences.ilovewine.com/Seattle/d704-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Seattle</a></li>
                <li><a href="https://experiences.ilovewine.com/New-York-City/d687-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">New York City</a></li>
            </ul>
        </div>
                            <!-- Main Link for Mobile -->
                            <div class="pt-4">
                                <a href="/destinations/" class="block w-full py-3 text-center text-sm font-semibold text-wine-700 border-2 border-wine-700 rounded-full hover:bg-wine-700 hover:text-white transition-all">
                                    View All Destinations
                                </a>
                            </div>
                        </div>
                    </li>
                     <!-- Destinations with Mega Menu -->
                    <li class="mobile-nav-item">
                        <button class="mobile-nav-toggle flex items-center justify-between w-full py-3 text-lg font-medium text-gray-800">
                            <span>Wine Guides</span>
                            <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Mobile Mega Menu -->
                        <div class="mobile-mega-menu hidden pl-4 mt-2 space-y-6">
                            <div>
                             <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">U.S. WINE REGIONS</h3>
                              <ul class="space-y-3">
                 <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Napa+Valley" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Napa Valley</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Sonoma" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Sonoma</a></li>
                <li><a href="http://experiences.ilovewine.com/Santa-Barbara/d4372-ttd?_gl=1*18mjq8f*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.18776062.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Santa Barbara</a></li>
                <li><a href="https://experiences.ilovewine.com/Paso-Robles/d24369-ttd?_gl=1*18mjq8f*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.18776062.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Paso Robles</a></li>
                <li><a href="https://experiences.ilovewine.com/Willamette-Valley/d51920-ttd?_gl=1*18mjq8f*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.18776062.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Willamette Valley</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Finger+Lakes" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Finger Lakes</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Walla+Walla" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Walla Walla</a></li>
                                 </ul>
                         </div>
                                <div>
            <div class="mb-8">
                <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">INTERNATIONAL</h3>
                <ul class="space-y-3">
                    <li><a href="https://experiences.ilovewine.com/Tuscany/d206-ttd?_gl=1*68e0r8*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.223433948.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Tuscany</a></li>
                    <li><a href="https://experiences.ilovewine.com/Bordeaux/d468-ttd?_gl=1*68e0r8*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.223433948.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Bordeaux</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Rioja" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Rioja</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Douro" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Douro</a></li>
                    <li><a href="https://experiences.ilovewine.com/Santorini/d959-ttd?_gl=1*6cqut4*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.43585762.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Santorini</a></li>
                    <li><a href="https://experiences.ilovewine.com/Mendoza/d931-ttd?_gl=1*68e0r8*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODM2MTkkajQkbDAkaDA.&_ga=2.223433948.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Mendoza</a></li>
                </ul>
            </div>
           
        </div>
          <div>
                <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">TRIP TOOLS</h3>
                <ul class="space-y-3">
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Best+Time+to+Go" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Best Time to Go</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=3Day+Itineraries" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">3-Day Itineraries</a></li>
                    <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Maps" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Maps</a></li>
                </ul>
            </div>
        <div>
            <h3 class="text-xs font-semibold uppercase tracking-wider text-wine-600 mb-4">CITY GUIDES</h3>
            <ul class="space-y-3">
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=San+Francisco" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">San Francisco</a></li>
                <li><a href="https://experiences.ilovewine.com/Los-Angeles/d645-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Los Angeles</a></li>
                <li><a href="https://experiences.ilovewine.com/San-Diego/d736-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">San Diego</a></li>
                <li><a href="https://experiences.ilovewine.com/searchResults/all?text=Portland" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Portland</a></li>
                <li><a href="https://experiences.ilovewine.com/Seattle/d704-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">Seattle</a></li>
                <li><a href="https://experiences.ilovewine.com/New-York-City/d687-ttd?_gl=1*1hlm1kd*_ga*MTU4MjU2NjgyLjE3NjQ5NjMxOTE.*_ga_JHN2ET8808*czE3NjQ5NzIzMDckbzMkZzEkdDE3NjQ5ODQyODQkajQ3JGwwJGgw&_ga=2.241598277.659097980.1764963191-158256682.1764963191" class="text-sm text-gray-600 hover:text-wine-700 transition-colors">New York City</a></li>
            </ul>
        </div>
                            <!-- Main Link for Mobile -->
                            <div class="pt-4">
                                <a href="/destinations/" class="block w-full py-3 text-center text-sm font-semibold text-wine-700 border-2 border-wine-700 rounded-full hover:bg-wine-700 hover:text-white transition-all">
                                    View All Destinations
                                </a>
                            </div>
                        </div>
                    </li>
                    <!-- Other menu items -->
                    <!-- <li><a href="/wine/" class="block py-3 text-lg font-medium text-gray-800">Wine Guides</a></li> -->
                    <li><a href="/category/food/" class="block py-3 text-lg font-medium text-gray-800">Food & Pairings</a></li>
                    <li><a href="/category/travel/" class="block py-3 text-lg font-medium text-gray-800">Travel</a></li>
                    <li><a href="/category/events/" class="block py-3 text-lg font-medium text-gray-800">Events</a></li>
                    
                    <!-- Free Guide CTA -->
                    <li class="pt-6 border-t">
                        <a href="/food-and-wine-pairing/" class="block py-4 text-center text-lg font-semibold text-wine-700 border-2 border-wine-700 rounded-full hover:bg-wine-700 hover:text-white transition-all">
                            Free Pairing Guide
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

  <main id="main-content" class="!mt-20">

   