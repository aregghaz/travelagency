@extends('page.index')

@section('title')

@endsection

@section('content')

    <style>
        .read-more-state {
            display: none;
        }

        .read-more-target {
            opacity: 0;
            max-height: 0;
            font-size: 0;
            transition: .25s ease;
        }

        .read-more-state:checked ~ .read-more-wrap .read-more-target {
            opacity: 1;
            font-size: inherit;
            max-height: 999em;
        }

        .gastronomy {

            text-align: center;
            display: list-item;
            /* text-decoration: none; */
            list-style-type: none;

            line-height: 23px;
            font-size: 32px;
            font-family: 'AvantGardeCTT-Bold';
            color: #fca955;
            margin-bottom: 13px;
        }

        .read-more-wrap {
            font-size: 20px;
            text-align: justify;

            color: #878787;

            font-family: system-ui;
            font-weight: 250;
        }

        .read-more-state ~ .read-more-trigger:before {
            content: 'Show more';
        }

        .read-more-state:checked ~ .read-more-trigger:before {
            content: 'Show less';
        }

        .read-more-trigger {
            cursor: pointer;
            display: inline-block;
            padding: 0 .5em;
            /* color: #666; */
            /* font-size: .9em; */
            line-height: 2;
            /* border: 1px solid #ddd; */
            border-radius: .25em;
        }

        .morecontent span {
            display: none;
        }

        .morelink {
            display: block;
        }

        .button-style {
            position: relative;

        }

        .block-style {

            height: 235px;
        }

        .moreTours {
            cursor: pointer;
        }
    </style>

    @include('script.script')
    @include('include.social')

    <div class="home_slider_block">
        <div class="home_slider clear slick-initialized slick-slider slick-dotted" role="toolbar">
            <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button"
                    style="">Previous
            </button>
            <div aria-live="polite" class="slick-list">
                <div class="slick-track" style="opacity: 1; display: -webkit-box; height: 460px" role="listbox">
                    <div class="slide slick-slide slick-current slick-active"
                         style="background: url('/uploads/1.jpg') center center / cover no-repeat fixed; width: 100%; position: relative; height: 450px;position: fixed"
                         data-slick-index="0" aria-hidden="false" tabindex="-1" role="option"
                         aria-describedby="slick-slide00">

                    </div>

                </div>
            </div>


        </div>

    </div>

    <div class="info_block">
        <div class="container clear">
            <div class="left_block image">
                <img src="/bundles/damain/images/info_img.png" width="100%" height="100%" alt="Discover Armenia">
            </div>
            <div class="right_block content block-style" id="block-style">
                <h2>Discover the land of mystery with us</h2>

                <input type="checkbox" class="read-more-state" id="post-1"/>
                <div class="read-more-wrap">
                    Armenia is situated at a cultural, historical, and religious intersection and located at the
                    crossroads between Europe and Asia. The country spans 29,743 square kilometers of mountainous
                    terrain centered on the Ararat Valley, the heart of the Armenian nation since biblical times.
                    Ancient geographers called the Armenian Highlands the "Island of Mountains" or the "Rooftop of Asia
                    Minor." Armenia lies in the highlands surrounding the mountains of Ararat, which was historically
                    part of Armenia and is the highest mountain in the region. Now located in Turkey, but clearly
                    visible from Armenia, it is regarded by the Armenians as a symbol of their land. Because of this,
                    the mountain is present on the Armenian national emblem today.
                    The Armenians, an ancient people living on an ancient land, call Armenia "Hayastan" and themselves
                    “Hay." Oral history explains the lineage of the Armenian people as being the direct descendants of
                    Noah's son Habeth. The indigenous people of the land of Ararat, Armenians forged their national
                    identity with the rise of powerful Armenian kingdoms, the adoption of Christianity as Armenia's
                    state religion, and the creation of the Armenian alphabet, which spurred the development of
                    literature, philosophy, and science.
                    <br>
                    <div class="read-more-target ">
                        There is evidence of an early civilization in Armenia in the Bronze Age and earlier, dating to
                        about
                        4000 BC. Archaeological surveys have resulted in the discovery of the world's earliest known
                        leather
                        shoe, skirt, and wine-producing facility.
                        Presently, the country is landlocked and has no navigable waterways, in contrast to Historic
                        Armenia, which at its height under King Tigran the Great, stretched from the Caspian Sea to the
                        Mediterranean Sea and was more than ten times the current size of the present day Republic.
                        Armenia
                        has borders with Georgia to the north, with Turkey to the west and south, with Azerbaijan to the
                        east and southwest, and with Iran to the south.
                        Russian is widely known in Armenia as well as English is increasingly gaining prominence,
                        followed
                        by French, Spanish and several oriental languages.
                        Armenia has a relatively large external diaspora (8 million by some estimates, greatly exceeding
                        the
                        3 million population of Armenia itself), with communities existing across the globe. The largest
                        Armenian communities outside of Armenia can be found in Russia, France, Iran, Georgia, Ukraine,
                        Poland, Brazil, Canada, Greece, Cyprus, the United States, etc.
                        Armenia's landscapes offer boundless beauty. Geographically it is very diverse from high
                        mountain
                        peaks, fertile valleys, picturesque land formations to basalt columns, rock sculptures, and
                        waterfalls. More than 200 rivers and streams traverse Armenia, with steep falls, rapids and
                        swift
                        currents. Armenia has 5 scenic canyons. In addition, there are over 200 therapeutic mineral
                        springs,
                        differing in composition and temperature.
                        The climate in Armenia is markedly continental. Summers are dry and sunny, lasting from June to
                        mid-September. The temperature fluctuates between 22 and 36 °C (72 and 97 °F). However, the low
                        humidity level mitigates the effect of high temperatures. Evening breezes blowing down the
                        mountains
                        provide a welcome refreshing and cooling effect. Springs are short, while autumns are long.
                        Autumns
                        are known for their vibrant and colourful foliage. Winters are quite cold with plenty of snow.
                        Winter sports enthusiasts enjoy skiing down the hills of Tsakhkadzor, located thirty minutes
                        outside
                        Yerevan. <br>
                        <div class="more1"><br>
                            <i class="gastronomy">What to do in Armenia</i><br>
                            This question asks every tourist that visits Armenia. We have good news for everyone.
                            Armenia has a huge variety of things to offer to any kind of tourists. Whether you like
                            architecture, literature, sightseeing, art, science, IT, spa resorts, etc., everything can
                            be satisfied.
                            One of the preferences of tourists is of course the nightlife. Clubs, bars, booze, parties,
                            and new people this becomes extremely interesting, especially when you visit other
                            countries. In Armenia, nightlife is an inseparable part of young and not young people’s
                            lives.
                            All clubs, bars and pubs are mostly located in the city center, so Armenian capital does not
                            sleep that early. Clubs are usually full at night a hour, that’s why their number is growing
                            day by day.
                            Here, you’ll meet quite a large variety of venues which will never let you get bored and you
                            will definitely know what to do in Armenia, especially Armenia nightlife. We’ve collected
                            the top clubs of Yerevan that is worth visiting and partying. So, be ready for sleepless
                            nights and cool hangouts!
                        </div>
                        <br>
                        <div class="more2"><br>
                            <i class="gastronomy">Gastronomy</i> <br>
                            This question asks every tourist that visits Armenia. We have good news for everyone.
                            Armenia has a huge variety of things to offer to any kind of tourists. Whether you like
                            architecture, literature, sightseeing, art, science, IT, spa resorts, etc., everything can
                            be satisfied.
                            One of the preferences of tourists is of course the nightlife. Clubs, bars, booze, parties,
                            and new people this becomes extremely interesting, especially when you visit other
                            countries. In Armenia, nightlife is an inseparable part of young and not young people’s
                            lives.
                            All clubs, bars and pubs are mostly located in the city center, so Armenian capital does not
                            sleep that early. Clubs are usually full at night a hour, that’s why their number is growing
                            day by day.
                            Here, you’ll meet quite a large variety of venues which will never let you get bored and you
                            will definitely know what to do in Armenia, especially Armenia nightlife. We’ve collected
                            the top clubs of Yerevan that is worth visiting and partying. So, be ready for sleepless
                            nights and cool hangouts!
                        </div>
                        <div class="more"><br>
                            <i class="gastronomy">History</i><br>From ancient times, Armenians have cherished their
                            artistic traditions, which reflect a unique culture and landscape. Aspects of everyday life
                            are expressed in the most artistic fashion, in needlework, embellishments, carvings and
                            design.
                            Architecture is one of the most interesting art forms in Armenia, as, for example, churches
                            bear artistic illustrations in frescoes and reliefs. Sculpting is everywhere - in nearly
                            every city, town, and village in Armenia.
                            Armenians love music, and they have been creating exquisite compositions for centuries.
                            Sharakans are traditional Armenian liturgical songs, which are experiencing a revival today.
                            Distinctive musical instruments are used to play Armenian folk songs. Sayat Nova, Komitas,
                            and Aram Khachaturian are among Armenia's best-known musicians and composers. Contemporary
                            music comes in the forms of jazz and pop.
                              Literature has always played a vital role in Armenia's cultural and national identity.
                            Christian culture and the invention of the Armenian alphabet by Mesrop Mashtots gave new
                            stimuli to the development of unique cultural traditions. There is no better place to view
                            this literary and artistic history than Yerevan's unique Matenadaran (Institute of Ancient
                            Manuscripts), which houses an extraordinary collection of 14,000 complete manuscripts,
                            fragments and miniatures.
                              The Caucasus region and Armenia in particular have been cited by scholars as the place
                            where rug and carpet weaving originated. Armenians continue this tradition, and one can find
                            many shops specializing in fine new and old rugs and carpets. At the weekend flea market,
                            rug sellers lay out their eye-catching merchandise filled with appealing colors and designs.
                            At the same market you will come across loads of charming handicrafts that will be hard to
                            resist purchase. Visitors to Armenia find handmade crafts, Armenian gold, precious and
                            semi-precious stones which inspire jewelers in many regions. Obsidian stone is used for
                            jewelry desk accessories and decorative items. Carpet making is not only a fine art, but
                            Kilim weaving, for example, is applied to clothing items, bags, and home furnishings. Wood
                            carvings replicate the ancient stone crosses (khachkars) found throughout the country, and
                            no two are exactly alike. Armenian crafts couple elegant utility and delightful whimsy in
                            textiles, ceramics, metal and woodworking.
                            Armenia is often referred to as an open-air museum. Tourists find over 4,000 historical
                            monuments throughout Armenia, covering various periods of the country's history from
                            prehistoric to Hellenistic times, and from the early to medieval Christian era. The
                            Armenians created their masterpieces during rare periods of peace and relative prosperity
                            over the centuries. Within Yerevan alone there are more than 40 fine arts museums and
                            galleries.
                            About 94 percent of Armenians consider themselves to be Armenian Christians. Armenia became
                            the first nation to declare Christianity as its state religion in 301 AD.
                            Traditionally, the Armenian Church recognizes the Catholicos of All Armenians as its leader.
                            He resides in Holy Etchmiadzin, where St. Gregory the Illuminator established the Armenian
                            Church in 301 AD. A National Ecclesiastical Assembly consisting of lay and clergy
                            representatives of Armenian communities around the world elects the Catholicos. There are
                            four hierarchical Sees in the Armenian Church: the Catholicate of All Armenians in
                            Etchmiadzin; the Catholicate of the Great House of Cilicia; the Patriarchate of Jerusalem;
                            and the Patriarchate of Constantinople. Small Roman Catholic and Protestant communities also
                            exist in Armenia. Catholic missionaries began converting Armenians in the Ottoman and
                            Persian empires in the early modern era, and American Protestant missionaries were active in
                            the nineteenth century. The Kurdish population is mostly Yezidi or Muslim. A Russian
                            Orthodox Church also serves its community.
                              When Armenia became the first country to adopt Christianity as its state religion, the
                            need of an indigenous language arose in order to translate the Bible. A devoted scholar and
                            monk, Mesrop Mashtots, created a distinctly Armenian alphabet after traveling all over
                            Armenia to gather the sounds of Armenian speech. In 405 AD he introduced the thirty-six
                            unique characters that make up the basis of the Armenian alphabet. During the middle Ages,
                            two additional characters were added to write words borrowed from foreign languages.
                              Russian is widely known in Armenia as well, and English is increasingly gaining
                            prominence, followed by French, Spanish and several oriental languages.
                              According to the February 2012 report on preliminary results of the 2011 census, Armenia’s
                            de facto population is 2,871,509. The National Statistical Service (NSS) reported that the
                            preliminary operational indicator of enumerated population during the 2011 Population Census
                            is 3,285,767. The previous 2001 census showed Armenia’s population as 3,458,303. Thus, the
                            NSS used two categories: enumerated population and de facto population. 12.6% of enumerated
                            citizens are out of Armenia.
                        </div>
                        <br>


                    </div>
                </div>
                <label for="post-1" class="read-more-trigger read-more button-style" id="deletStyle"></label>


            </div>
        </div>
    </div>

    @include('include.tursEn')

    <div class="popular_excursion_block">

        @include('include.excursionEn')

    </div>




    <div class="ui small modal accpetModal">
        <i class="close icon"></i>
        <div class="content modalContent">
            <p>successfully added to cart</p>
            <p><a href="/en/basket.html">cart</a></p>
        </div>
    </div>



@endsection