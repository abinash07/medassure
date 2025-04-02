// Set URL in localHost
localStorage.setItem("current_lp_url", window.location.href);

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function searchSuggestionsLog(searchTerm, type = null, clickedData = null, source = null, clickedDataUrl = null){

    var data = { searchTerm: searchTerm, type: type, clickedData: clickedData, source: source, clickedDataUrl: clickedDataUrl };

    $.getJSON(base_url + "suggestionlog/" + searchTerm, data, function(data) {

        console.log(data);

    });

}

function searchSuggestionsAjaxLoadOld(searchTerm, source = '') {
    var plcookie = $.cookie("preferredLocation");
    console.log('pl'+plcookie);
    if($.cookie("preferredLocation")!=undefined && $.cookie("preferredLocation")!='')
    {
        var pl = plcookie.replace(' ', '-');
    }else{
        var pl = 'India';
    }
    if (searchTerm == '') {
        $("#search-suggestions").empty().hide();
        $("#search-suggestions-mobile").empty().hide();
        return;
    }
    $.getJSON(base_url + "suggestions/" + searchTerm, function(data) {
        $("#search-suggestions").empty().hide();
        $("#search-suggestions-mobile").empty().hide();
        var items = [];
        suggestions = data.groups;
        var totalResults = data.matches;
        var text = '';
        var treatmentText = "";
        var doctorsText = "";
        var hospitalsText = "";
        var articlesText = "";
        var tagsText = "";
        if (totalResults > 0)
            text = totalResults + " results found for <b>" + searchTerm + "</b></br>";
        else
            text = 'Click enter to search ';
        //traverse all the categories
        $.each(suggestions, function(key, groups) {
            var base_url = 'https://www.vaidam.com';
            var category = groups.groupValue;
            var group = groups.doclist;
            var totalInGroup = group.numFound;
            var hospitalsLink = base_url + "/listings/hospitals/" + searchTerm;
            var doctorsLink = base_url + "/listings/doctors/" + searchTerm;
            var articlesLink = base_url + "/listings/treatments/" + searchTerm;
            var groupItems = group.docs;
            var tagsLink = base_url + "/tag-search/" + searchTerm + "/"+pl.toLowerCase();
            var dispalyCatName = "";
            if (category == "blog") {
                totalInGroup = totalInGroup;
                dispalyCatName = "<b><\/br>Articles related to " + searchTerm + " (" + totalInGroup + ") <\/br><\/b>";
            }
            if (category == "hospital") {
                totalInGroup = totalInGroup;
                dispalyCatName = "<b><\/br>Hospitals related to " + searchTerm + " (" + totalInGroup + ") <\/br><\/b>";
            }
            if (category == "doctors") {
                totalInGroup = totalInGroup;
                dispalyCatName = "<b><\/br>Doctors related to" + searchTerm + " (" + totalInGroup + ") <\/br><\/b>";
            }
            if (category == "treatment") {
                totalInGroup = totalInGroup;
                dispalyCatName = "<b><\/br>Treatments related to " + searchTerm + " (" + totalInGroup + ") <\/br><\/b>";
            }
            if (category == "tags") {
                totalInGroup = totalInGroup;
                dispalyCatName = "<b><\/br>Tags related to " + searchTerm + " (" + totalInGroup + ") <\/br><\/b>";
            }
            var subtext = "<ul>";
            // traverse individual group
            $.each(groupItems, function(key, item) {
                if (category == "treatment") {
                    var seoTerm = item.label.replace(/\s/g, "-");
                    var url = base_url + "/treatment-search/" + seoTerm + '?source=search';
                } else if (category == "tags") {
                    var seoTerm = item.label.replace(/\s/g, "-");
                    var url = base_url + "/search/" + item.url + '/'+pl.toLowerCase();
                } else {
                    var url = item.url + '?source=search';
                }
		url = url.replace("https://staging.vaidam.com","https://www.vaidam.com");
        url = url.replace("com//",'com/');
                subtext = subtext + "<a href=\"" + url + "\" onClick='suggestionLog(\"" + item.label + "\",\"" + url + "\");'><li>" + item.label + "<\/li><\/a>"
            });

            subtext = subtext + "<\/ul>";
            if (category == "blog")
                articlesText = dispalyCatName + subtext;
            if (category == "hospital")
                hospitalsText = dispalyCatName + subtext;
            if (category == "doctors")
                doctorsText = dispalyCatName + subtext;
            if (category == "treatment")
                treatmentText = dispalyCatName + subtext;
            if (category == "tags")
                tagsText = dispalyCatName + subtext;
            // var link = $($.parseHTML(val.term)).text();
        });
        //text = text + tagsText + treatmentText+hospitalsText+doctorsText+articlesText;
        text = text + tagsText + hospitalsText + doctorsText;
        if (source == 'home') {
            $("#search-suggestionsblock").html(text).show();
        } else if (source == 'home_mobile') {
            $(".sect-21").html(text).show();
        } else {
            $("#search-suggestions").html(text).show();
            $("#search-suggestions-mobile").html(text).show();
        }

    });
}

function searchSuggestionsAjaxLoad(searchTerm, source = '') {
    // var plcookie = $.cookie("preferredLocation");
    // console.log('pl'+plcookie);
    // if($.cookie("preferredLocation")!=undefined && $.cookie("preferredLocation")!='')
    // {
    //     var pl = plcookie.replace(' ', '-');
    // }else{
        var pl = 'India';
    // }
    if (searchTerm == '') {
        $("#search-suggestions").empty().hide();
        $("#search-suggestions-mobile").empty().hide();
        return;
    }
    $.getJSON(base_url + "suggestions/" + searchTerm, function(data) {
        $("#search-suggestions").empty().hide();
        $("#search-suggestions-mobile").empty().hide();
        var items = [];
        suggestions = data.groups;
        var totalResults = data.matches;
        var text = '';
        var treatmentText = "";
        var doctorsText = "";
        var hospitalsText = "";
        var articlesText = "";
        var tagsText = "";
        if (totalResults > 0)
            text = totalResults + " results found for <b>" + searchTerm + "</b></br>";
        else
            text = 'Click enter to search ';
        //traverse all the categories
        $.each(suggestions, function(key, groups) {
            // var base_url = base_url.replace('//','/');
            var category = groups.groupValue;
            var group = groups.doclist;
            var totalInGroup = group.numFound;
            var hospitalsLink = base_url + "/listings/hospitals/" + searchTerm;
            var doctorsLink = base_url + "/listings/doctors/" + searchTerm;
            var articlesLink = base_url + "/listings/treatments/" + searchTerm;
            var groupItems = group.docs;
            var tagsLink = base_url + "/tag-search/" + searchTerm + "/"+pl.toLowerCase();
            var dispalyCatName = "";
            if (category == "blog") {
                totalInGroup = totalInGroup;
                dispalyCatName = "<b><\/br>Articles related to " + searchTerm + " (" + totalInGroup + ") <\/br><\/b>";
            }
            if (category == "hospital") {
                totalInGroup = totalInGroup;
                dispalyCatName = "<b><\/br>Hospitals related to " + searchTerm + " (" + totalInGroup + ") <\/br><\/b>";
            }
            if (category == "doctors") {
                totalInGroup = totalInGroup;
                dispalyCatName = "<b><\/br>Doctors related to" + searchTerm + " (" + totalInGroup + ") <\/br><\/b>";
            }
            if (category == "treatment") {
                totalInGroup = totalInGroup;
                dispalyCatName = "<b><\/br>Treatments related to " + searchTerm + " (" + totalInGroup + ") <\/br><\/b>";
            }
            if (category == "tags") {
                totalInGroup = totalInGroup;
                dispalyCatName = "<b><\/br>Tags related to " + searchTerm + " (" + totalInGroup + ") <\/br><\/b>";
            }
            var subtext = "<ul>";
            // traverse individual group
            $.each(groupItems, function(key, item) {
                if (category == "treatment") {
                    var seoTerm = item.label.replace(/\s/g, "-");
                    var url = base_url + "/treatment-search/" + seoTerm + '?source=search';
                    var docImage = docSpeciality = docState = docCountry = hosImage = hosState = hosCountry = '';
                } else if (category == "tags") {
                    var seoTerm = item.label.replace(/\s/g, "-");
                    var url = base_url + "/search/" + item.url + '/'+pl.toLowerCase();
                    url = url.replace('//search/','/search/');
                    var docImage = docSpeciality = docState = docCountry = hosImage = hosState = hosCountry = '';
                } else {
                    var url = item.url + '?source=search';
                    url = url.replace('//search/','/search/');
                    var docImage = item.ss_doctor_image ? "<img src="+ item.ss_doctor_image +">" : '';                    
                    var docSpeciality =  item.im_field_type_of_doctor ? item.im_field_type_of_doctor + "|" : '';
                    var docState =  item.sm_field_city ? item.sm_field_city+ "|" : '';
                    var docCountry =  item.sm_doctor_country ? item.sm_doctor_country : '';

                    var hosImage =  item.ss_hospital_image_for_list_view ? "<img src="+item.ss_hospital_image_for_list_view +">" : '';
                    var hosState =  item.ss_hospital_city ? item.ss_hospital_city+ "|" : '';
                    var hosCountry =  item.ss_hospital_country ? item.ss_hospital_country : '';

                }
		url = url.replace("https://staging.vaidam.com","https://www.vaidam.com");
        url = url.replace("com//",'com/');
                subtext = subtext + "<a href=\"" + url + "\" onClick='suggestionLog(\"" + item.label + "\",\"" + url + "\" );'>" + docImage + hosImage + "<li>" + item.label + "<span>" + docSpeciality +  docState + docCountry  + hosState + hosCountry +  "</span>"  +"<\/li><\/a>"
            });

            subtext = subtext + "<\/ul>";
            if (category == "blog")
                articlesText = dispalyCatName + subtext;
            if (category == "hospital")
                hospitalsText = dispalyCatName + subtext;
            if (category == "doctors")
                doctorsText = dispalyCatName + subtext;
            if (category == "treatment")
                treatmentText = dispalyCatName + subtext;
            if (category == "tags")
                tagsText = dispalyCatName + subtext;
            // var link = $($.parseHTML(val.term)).text();
        });
        //text = text + tagsText + treatmentText+hospitalsText+doctorsText+articlesText;
        text = text + tagsText + hospitalsText + doctorsText;
        if (source == 'home') {
            $("#search-suggestionsblock").html(text).show();
        } else if (source == 'home_mobile') {
            $(".sect-21").html(text).show();
        } else {
            $("#search-suggestions").html(text).show();
            $("#search-suggestions-mobile").html(text).show();
        }

    });
}


function suggestionLog(clickedData,clickedDataUrl){

    var cururl = window.location.href;
    var newWindowWidth = $(window).width();

    if (newWindowWidth < 768) {
        var searchTerm = $('.searchTermMobile').val();
        searchSuggestionsLog(searchTerm, 'onClick', clickedData, cururl, clickedDataUrl);
    }
    else
    {
        var searchTerm = $('.searchTerm').val();
        searchSuggestionsLog(searchTerm, 'onClick', clickedData, cururl, clickedDataUrl);
    }
}

function doGTranslate(lang_pair) {
    if (lang_pair.value) lang_pair = lang_pair.value;
    if (lang_pair == "") return;
    var lang = lang_pair.split("|")[1];
    var plang = location.pathname.split("/")[1];
    if (
        plang.length != 2 &&
        plang.toLowerCase() != "zh-cn" &&
        plang.toLowerCase() != "zh-tw"
    ){
    plang = "en";
    }
    else if(plang=='hp'){
        plang = "en";
    }

    if (lang == "en")
        location.href =
            location.protocol +
            "//" +
            location.host +
            location.pathname.replace("/" + plang + "/", "/") +
            location.search;
    else
        location.href =
            location.protocol +
            "//" +
            location.host +
            "/" +
            lang +
            location.pathname.replace("/" + plang + "/", "/") +
            location.search;
}

$(document).ready(function(){
    $(".translateText li").click(function () {
        doGTranslate($(this).attr("value"));
    });
   $('.lang_opt, .select-lang-mob select').on('change',function(){
        doGTranslate($(this).val());
    })

    $(document).on('click', function (e) {
        if ($(e.target).closest("#search-suggestionsblock").length === 0) {
            $("#search-suggestionsblock").hide();
        }
    });
    

     //apply arabic video
     var current_lang = document.documentElement.lang;
     if (current_lang == "ar") {
         //$('.vaidam_yt_video_block').empty().html('<iframe class="video-cnt1" width="100%" height="250" src="https://www.youtube.com/embed/lapGLpHoCd4?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>');
         $('.home-page-video-block').attr("id", "player-lapGLpHoCd4");
         $('.home-page-video-image').attr("id", "lapGLpHoCd4");
         $('.home-page-video-image').attr("src", "https://img.youtube.com/vi/lapGLpHoCd4/mqdefault.jpg");
     } else if (current_lang == "fr") {
         //$('.vaidam_yt_video_block').empty().html('<iframe class="video-cnt1" width="100%" height="250" src="https://www.youtube.com/embed/a1o1Ptmgmgg?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>');
         $('.home-page-video-block').attr("id", "player-a1o1Ptmgmgg");
         $('.home-page-video-image').attr("id", "a1o1Ptmgmgg");
         $('.home-page-video-image').attr("src", "https://img.youtube.com/vi/a1o1Ptmgmgg/mqdefault.jpg");
     }

     /* For video Block */

/* For video Block */   
function loadScript() {if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
    var tag = document.createElement('script');tag.src = "https://www.youtube.com/iframe_api";var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);}}
    function loadPlayer() {window.onYouTubePlayerAPIReady = function() {onYouTubePlayer();};}
    $(function () {loadScript();});
// $(window).bind("load", function() {
//     if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
//     var tag = document.createElement('script');
//         tag.src = "https://www.youtube.com/iframe_api";
//         var firstScriptTag = document.getElementsByTagName('script')[0];
//         firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//     }
//       })
    var player;
    
    var videoPlayers = new Array();
    
    $(".click-to-play-video").click(function() {    
        var videoId = $(this).find('.video-image').attr('id');
        var playerId = videoId;
        if (videoId.indexOf('mobile') != -1) {
            var mobileVideoId = videoId.split('mobile-');
            videoId = mobileVideoId[1];
            //window.scrollY = '6883';
        }
    
        // var videoId = $(".video-image").attr('id'); 
        player = new YT.Player('player-' + playerId, {
            width: '100%',
            height: '250',
            videoId: videoId,
            playerVars: {
                'autoplay': 1,
                'showinfo': 0,
                'rel': 0
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
        videoPlayers.push(player);
    });
    
    
    function onPlayerReady(event) {
        event.target.playVideo();
    }
    
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING) {
            videoStop(event.target.a.id);
        }
    }
    
    function videoStop(player_id) {    
        var tempPlayers = $("iframe.yt_players");
        if (videoPlayers.length > 1) {
            for (var i = 0; i < videoPlayers.length; i++) {
                if (videoPlayers[i].a.id != player_id) {
                    videoPlayers[i].stopVideo();
                }
            }
    
        }
    
    }
    
    $(".play-cost-video, .play-search-video").click(function() {
        var videoId = $(this).attr('id');
        if (videoId.indexOf('mobile') != -1) {
            var mobileVideoId = videoId.split('mobile-');
            videoId = mobileVideoId[1];
            //window.scrollY = '6883';
        }
        $('.video-image').attr('id', videoId);
        $('.cost-video-iframe').children('iframe').attr('id', 'player-' + videoId);
        $('.cost-video-iframe').children('iframe').attr('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&showinfo=0&rel=0&enablejsapi=1&widgetid=1');
        $("#video-cost-modal").modal({
            backdrop: 'static',
            keyboard: false
        });
    });
    /* For video Block */
     
    $(".searchTerm").on('keyup', function(e) {
        if (e.keyCode == 13) {
            // Do something
            // var searchV= $('.searchTerm').val();
            // searchHospitals(searchV);
            var cururl = window.location.href;
            var searchTerm = $('.searchTerm').val();
            searchSuggestionsLog(searchTerm, 'onEnter', clickedData = null, cururl, clickedDataUrl = null);
        } else {
            var searchTerm = $('.searchTerm').val();
            searchSuggestionsAjaxLoad(searchTerm, 'home');
        }
    });
    $(".searchTermMobile").on('keyup', function(e) {
        if (e.keyCode == 13) {
            // Do something
            // var searchV= $('.searchTerm').val();
            // searchHospitals(searchV);
            var cururl = window.location.href;
            var searchTerm = $('.searchTermMobile').val();
            searchSuggestionsLog(searchTerm, 'onEnter', clickedData = null, cururl, clickedDataUrl = null);
        } else {
            var searchTerm = $('.searchTermMobile').val();
            searchSuggestionsAjaxLoad(searchTerm, 'home_mobile');
        }
    });

    $(".search-button").on('click', function(e) {

        var cururl = window.location.href;
        var newWindowWidth = $(window).width();
        if (newWindowWidth < 768) {
            var searchTerm = $('.searchTermMobile').val();
        }else{
            var searchTerm = $('.searchTerm').val();
        }
        searchSuggestionsLog(searchTerm, 'onIconClick', clickedData = null, cururl, clickedDataUrl = null);
    });

if($(window).width() <= 768){   
    $('.searchTerm').focus(function(e) {
        $('.search-mobile-view').fadeIn(function() {
            $('.dd-options .form-control').focus();
        });
    
    });
    
    $('.closeShowOption').on("click", function() {
        $('.search-mobile-view').fadeOut();
        $('.sect-21').html('');
        return false;
    })
}
})