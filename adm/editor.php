<?php
    include('../control.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- JB -->

    <script src="../../bootstrap/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../css/estilo.css"> 

<!-- /JB -->  

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="src/wysiwyg.js"></script>
<script type="text/javascript" src="src/wysiwyg-editor.js"></script>
<!-- github.io delivers wrong content-type - but you may want to include FontAwesome in 'wysiwyg-editor.css' -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="src/wysiwyg-editor.css" />
<script type="text/javascript">
$(document).ready(function(){
    // Full featured editor
    $('#editor1,#editor2,#editor3').each( function(index, element)
    {
        $(element).wysiwyg({
            classes: 'some-more-classes',
            // 'selection'|'top'|'top-selection'|'bottom'|'bottom-selection'
            toolbar: index == 0 ? 'top-selection' : (index == 1 ? 'bottom' : 'selection'),
            buttons: {
                // Dummy-HTML-Plugin
                dummybutton1: index != 1 ? false : {
                    html: $('<input id="submit" type="button" value="bold" />').click(function(){
                                // We simply make 'bold'
                                if( $(element).wysiwyg('shell').getSelectedHTML() )
                                    $(element).wysiwyg('shell').bold();
                                else
                                    alert( 'Please selection some text' );
                            }),
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                // Dummy-Button-Plugin
                dummybutton2: index != 1 ? false : {
                    title: 'Dummy',
                    image: '\uf1e7',
                    click: function( $button ) {
                            alert('Do something');
                           },
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                // Smiley plugin
                /*smilies: {
                    title: 'Smilies',
                    image: '\uf118', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            var list_smilies = [
                                    '<img src="smiley/afraid.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/amorous.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/angel.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/angry.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/bored.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/cold.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/confused.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/cross.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/crying.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/devil.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/disappointed.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/dont-know.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/drool.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/embarrassed.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/excited.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/excruciating.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/eyeroll.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/happy.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/hot.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/hug-left.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/hug-right.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/hungry.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/invincible.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/kiss.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/lying.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/meeting.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/nerdy.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/neutral.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/party.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/pirate.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/pissed-off.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/question.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/sad.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/shame.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/shocked.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/shut-mouth.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/sick.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/silent.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/sleeping.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/sleepy.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/stressed.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/thinking.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/tongue.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/uhm-yeah.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/wink.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/working.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/bathing.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/beer.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/boy.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/camera.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/chilli.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/cigarette.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/cinema.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/coffee.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/girl.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/console.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/grumpy.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/in_love.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/internet.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/lamp.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/mobile.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/mrgreen.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/musical-note.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/music.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/phone.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/plate.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/restroom.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/rose.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/search.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/shopping.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/star.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/studying.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/suit.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/surfing.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/thunder.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/tv.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/typing.png" width="16" height="16" alt="" />',
                                    '<img src="smiley/writing.png" width="16" height="16" alt="" />'
                            ];
                            var $smilies = $('<div/>').addClass('wysiwyg-toolbar-smilies')
                                                      .attr('unselectable','on');
                            $.each( list_smilies, function(index,smiley){
                                if( index != 0 )
                                    $smilies.append(' ');
                                var $image = $(smiley).attr('unselectable','on');
                                // Append smiley
                                var imagehtml = ' '+$('<div/>').append($image.clone()).html()+' ';
                                $image
                                    .css({ cursor: 'pointer' })
                                    .click(function(event){
                                        $(element).wysiwyg('shell').insertHTML(imagehtml); // .closePopup(); - do not close the popup
                                    })
                                    .appendTo( $smilies );
                            });
                            var $container = $(element).wysiwyg('container');
                            $smilies.css({ maxWidth: parseInt($container.width()*0.95)+'px' });
                            $popup.append( $smilies );
                            // Smilies do not close on click, so force the popup-position to cover the toolbar
                            var $toolbar = $button.parents( '.wysiwyg-toolbar' );
                            if( ! $toolbar.length ) // selection toolbar?
                                return ;
                            return { // this prevents applying default position
                                left: parseInt( ($toolbar.outerWidth() - $popup.outerWidth()) / 2 ),
                                top: $toolbar.hasClass('wysiwyg-toolbar-bottom') ? ($container.outerHeight() - parseInt($button.outerHeight()/4)) : (parseInt($button.outerHeight()/4) - $popup.height())
                            };
                           },
                    //showstatic: true,    // wanted on the toolbar
                    showselection: index == 2 ? true : false    // wanted on selection
                },*/
                insertimage: {
                    title: 'Insert image',
                    image: '\uf030', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: index == 2 ? true : false    // wanted on selection
                },
                /*insertvideo: {
                    title: 'Insert video',
                    image: '\uf03d', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: index == 2 ? true : false    // wanted on selection
                },*/
                insertlink: {
                    title: 'Insert link',
                    image: '\uf08e' // <img src="path/to/image.png" width="16" height="16" alt="" />
                },
                // Fontname plugin
                /*fontname: index == 1 ? false : {
                    title: 'Font',
                    image: '\uf031', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            var list_fontnames = {
                                    // Name : Font
                                    'Arial, Helvetica' : 'Arial,Helvetica',
                                    'Verdana'          : 'Verdana,Geneva',
                                    'Georgia'          : 'Georgia',
                                    'Courier New'      : 'Courier New,Courier',
                                    'Times New Roman'  : 'Times New Roman,Times'
                                };
                            var $list = $('<div/>').addClass('wysiwyg-toolbar-list')
                                                   .attr('unselectable','on');
                            $.each( list_fontnames, function( name, font ){
                                var $link = $('<a/>').attr('href','#')
                                                    .css( 'font-family', font )
                                                    .html( name )
                                                    .click(function(event){
                                                        $(element).wysiwyg('shell').fontName(font).closePopup();
                                                        // prevent link-href-#
                                                        event.stopPropagation();
                                                        event.preventDefault();
                                                        return false;
                                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                           },
                    //showstatic: true,    // wanted on the toolbar
                    showselection: index == 0 ? true : false    // wanted on selection
                },*/
                // Fontsize plugin
                fontsize: index != 1 ? false : {
                    title: 'Size',
                    image: '\uf034', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            /*
                            var list_fontsizes = {
                                // Name : Size
                                'Huge'    : 7,
                                'Larger'  : 6,
                                'Large'   : 5,
                                'Normal'  : 4,
                                'Small'   : 3,
                                'Smaller' : 2,
                                'Tiny'    : 1
                            };
                            var $list = $('<div/>').addClass('wysiwyg-toolbar-list')
                                                   .attr('unselectable','on');
                            $.each( list_fontsizes, function( name, size ){
                                var $link = $('<a/>').attr('href','#')
                                                    .css( 'font-size', (8 + (size * 3)) + 'px' )
                                                    .html( name )
                                                    .click(function(event){
                                                        $(element).wysiwyg('shell').fontSize(size).closePopup();
                                                        // prevent link-href-#
                                                        event.stopPropagation();
                                                        event.preventDefault();
                                                        return false;
                                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                            */
                            // Hack: http://stackoverflow.com/questions/5868295/document-execcommand-fontsize-in-pixels/5870603#5870603
                            var list_fontsizes = [];
                            for( var i=8; i <= 11; ++i )
                                list_fontsizes.push(i+'px');
                            for( var i=12; i <= 28; i+=2 )
                                list_fontsizes.push(i+'px');
                            list_fontsizes.push('36px');
                            list_fontsizes.push('48px');
                            list_fontsizes.push('72px');
                            var $list = $('<div/>').addClass('wysiwyg-toolbar-list')
                                                   .attr('unselectable','on');
                            $.each( list_fontsizes, function( index, size ){
                                var $link = $('<a/>').attr('href','#')
                                                    .html( size )
                                                    .click(function(event){
                                                        $(element).wysiwyg('shell').fontSize(7).closePopup();
                                                        $(element).wysiwyg('container')
                                                                .find('font[size=7]')
                                                                .removeAttr("size")
                                                                .css("font-size", size);
                                                        // prevent link-href-#
                                                        event.stopPropagation();
                                                        event.preventDefault();
                                                        return false;
                                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                           }
                    //showstatic: true,    // wanted on the toolbar
                    //showselection: true    // wanted on selection
                },
                // Header plugin
                header: index != 1 ? false : {
                    title: 'Header',
                    image: '\uf1dc', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    popup: function( $popup, $button ) {
                            var list_headers = {
                                    // Name : Font
                                    'Header 1' : '<h1>',
                                    'Header 2' : '<h2>',
                                    'Header 3' : '<h3>',
                                    'Header 4' : '<h4>',
                                    'Header 5' : '<h5>',
                                    'Header 6' : '<h6>',
                                    'Code'     : '<pre>'
                                };
                            var $list = $('<div/>').addClass('wysiwyg-toolbar-list')
                                                   .attr('unselectable','on');
                            $.each( list_headers, function( name, format ){
                                var $link = $('<a/>').attr('href','#')
                                                     .css( 'font-family', format )
                                                     .html( name )
                                                     .click(function(event){
                                                        $(element).wysiwyg('shell').format(format).closePopup();
                                                        // prevent link-href-#
                                                        event.stopPropagation();
                                                        event.preventDefault();
                                                        return false;
                                                    });
                                $list.append( $link );
                            });
                            $popup.append( $list );
                           }
                    //showstatic: true,    // wanted on the toolbar
                    //showselection: false    // wanted on selection
                },
                bold: {
                    title: 'Bold (Ctrl+B)',
                    image: '\uf032', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 'b'
                },
                italic: {
                    title: 'Italic (Ctrl+I)',
                    image: '\uf033', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 'i'
                },
                underline: {
                    title: 'Underline (Ctrl+U)',
                    image: '\uf0cd', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 'u'
                },
                /*strikethrough: {
                    title: 'Strikethrough (Ctrl+S)',
                    image: '\uf0cc', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    hotkey: 's'
                },*/
                forecolor: {
                    title: 'Text color',
                    image: '\uf1fc' // <img src="path/to/image.png" width="16" height="16" alt="" />
                },
                highlight: {
                    title: 'Background color',
                    image: '\uf043' // <img src="path/to/image.png" width="16" height="16" alt="" />
                },
                alignleft: index != 0 ? false : {
                    title: 'Left',
                    image: '\uf036', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                aligncenter: index != 0 ? false : {
                    title: 'Center',
                    image: '\uf037', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                alignright: index != 0 ? false : {
                    title: 'Right',
                    image: '\uf038', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                alignjustify: index != 0 ? false : {
                    title: 'Justify',
                    image: '\uf039', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                /*subscript: index == 1 ? false : {
                    title: 'Subscript',
                    image: '\uf12c', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                superscript: index == 1 ? false : {
                    title: 'Superscript',
                    image: '\uf12b', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: true    // wanted on selection
                },
                indent: index != 0 ? false : {
                    title: 'Indent',
                    image: '\uf03c', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                outdent: index != 0 ? false : {
                    title: 'Outdent',
                    image: '\uf03b', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },*/
                orderedList: index != 0 ? false : {
                    title: 'Ordered list',
                    image: '\uf0cb', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                unorderedList: index != 0 ? false : {
                    title: 'Unordered list',
                    image: '\uf0ca', // <img src="path/to/image.png" width="16" height="16" alt="" />
                    //showstatic: true,    // wanted on the toolbar
                    showselection: false    // wanted on selection
                },
                removeformat: {
                    title: 'Remove format',
                    image: '\uf12d' // <img src="path/to/image.png" width="16" height="16" alt="" />
                }
            },
            // Submit-Button
            submit: {
                title: 'Submit',
                image: '\uf00c' // <img src="path/to/image.png" width="16" height="16" alt="" />
            },
            // Other properties
            dropfileClick: 'Drop image or click',
            placeholderUrl: 'www.example.com',
            placeholderEmbed: '<embed/>',
            maxImageSize: [600,200],
            /*
            onImageUpload: function( insert_image ) {
                            // Used to insert an image without XMLHttpRequest 2
                            // A bit tricky, because we can't easily upload a file
                            // via '$.ajax()' on a legacy browser.
                            // You have to submit the form into to a '<iframe/>' element.
                            // Call 'insert_image(url)' as soon as the file is online
                            // and the URL is available.
                            // Best way to do: http://malsup.com/jquery/form/
                            // For example:
                            //$(this).parents('form')
                            //       .attr('action','/path/to/file')
                            //       .attr('method','POST')
                            //       .attr('enctype','multipart/form-data')
                            //       .ajaxSubmit({
                            //          success: function(xhrdata,textStatus,jqXHR){
                            //            var image_url = xhrdata;
                            //            console.log( 'URL: ' + image_url );
                            //            insert_image( image_url );
                            //          }
                            //        });
                        },*/
            videoFromUrl: function( url ) {
                // Contributions are welcome :-)

                // youtube - http://stackoverflow.com/questions/3392993/php-regex-to-get-youtube-video-id
                var youtube_match = url.match( /^(?:http(?:s)?:\/\/)?(?:[a-z0-9.]+\.)?(?:youtu\.be|youtube\.com)\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/)([^\?&\"'>]+)/ );
                if( youtube_match && youtube_match[1].length == 11 )
                    return '<iframe src="//www.youtube.com/embed/' + youtube_match[1] + '" width="640" height="360" frameborder="0" allowfullscreen></iframe>';

                // vimeo - http://embedresponsively.com/
                var vimeo_match = url.match( /^(?:http(?:s)?:\/\/)?(?:[a-z0-9.]+\.)?vimeo\.com\/([0-9]+)$/ );
                if( vimeo_match )
                    return '<iframe src="//player.vimeo.com/video/' + vimeo_match[1] + '" width="640" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';

                // dailymotion - http://embedresponsively.com/
                var dailymotion_match = url.match( /^(?:http(?:s)?:\/\/)?(?:[a-z0-9.]+\.)?dailymotion\.com\/video\/([0-9a-z]+)$/ );
                if( dailymotion_match )
                    return '<iframe src="//www.dailymotion.com/embed/video/' + dailymotion_match[1] + '" width="640" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';

                // undefined -> create '<video/>' tag
            },
            onKeyPress: function( code, character, shiftKey, altKey, ctrlKey, metaKey ) {
                            // E.g.: submit form on enter-key:
                            //if( (code == 10 || code == 13) && !shiftKey && !altKey && !ctrlKey && !metaKey ) {
                            //    submit_form();
                            //    return false; // swallow enter
                            //}
                        }
        })
        .change(function(){
            if( typeof console != 'undefined' )
                console.log( 'change' );
        })
        .focus(function(){
            if( typeof console != 'undefined' )
                console.log( 'focus' );
        })
        .blur(function(){
            if( typeof console != 'undefined' )
                console.log( 'blur' );
        });
    });

    // Demo-Buttons
    $('#editor3-bold').click(function(){
        $('#editor3').wysiwyg('shell').bold();
        return false;
    });
    $('#editor3-red').click(function(){
        $('#editor3').wysiwyg('shell').highlight('#ff0000');
        return false;
    });
    $('#editor3-sethtml').click(function(){
        $('#editor3').wysiwyg('shell').setHTML('This is the new text.');
        return false;
    });
    $('#editor3-inserthtml').click(function(){
        $('#editor3').wysiwyg('shell').insertHTML('Insert some text.');
        return false;
    });

    // Raw editor
    var option = {
        element: $('#editor0').get(0),
        onkeypress: function( code, character, shiftKey, altKey, ctrlKey, metaKey ) {
                        if( typeof console != 'undefined' )
                            console.log( 'RAW: '+character+' key pressed' );
                    },
        onselection: function( collapsed, rect, nodes, rightclick ) {
                        if( typeof console != 'undefined' && rect )
                            console.log( 'RAW: selection rect('+rect.left+','+rect.top+','+rect.width+','+rect.height+'), '+nodes.length+' nodes' );
                    },
        onplaceholder: function( visible ) {
                        if( typeof console != 'undefined' )
                            console.log( 'RAW: placeholder ' + (visible ? 'visible' : 'hidden') );
                    }
    };
    var wysiwygeditor = wysiwyg( option );
    //wysiwygeditor.setHTML( '<html>' );
});
</script>
<style>
    body {
        font-family: Arial,Verdana;
    }
    p {
        margin: 0;
        padding: 0;
    }
    .button {
        -moz-user-select: none;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    /* CSS for the font-name + font-size plugin */
    .wysiwyg-toolbar-list {
        max-height: 16em;
        overflow: auto;
        overflow-x: hidden;
        overflow-y: scroll;
    }
    .wysiwyg-toolbar-list a,
    .wysiwyg-toolbar-list a:link,
    .wysiwyg-toolbar-list a:visited {
        display: block;
        color: black;
        padding: 5px 10px;
        text-decoration: none;
        cursor: pointer;
    }
    .wysiwyg-toolbar-list a:hover {
        color: HighlightText;
        background-color: Highlight;
    }
    /* CSS for the smiley plugin */
    .wysiwyg-toolbar-smilies {
        padding: 10px;
        text-align: center;
        white-space: normal;
    }
    .wysiwyg-toolbar-smilies img {
        display: -moz-inline-stack; /* inline-block: http://blog.mozilla.org/webdev/2009/02/20/cross-browser-inline-block/ */
        display: inline-block;
        *display: inline;
    }
</style>
</head>
<body>

<?php

//guardar en la base de datos
        /*$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "economia";*/
        $servername = "localhost";
        $username = "economiaubd";
        $password = "!$1nfo.3conomiA!";
        $dbname = "economia";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        //para consultar
        $mysqli = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

//Parametros Recibidos
    if (!empty($_POST)){

        $success = "vacio";//se declara esta variable
        $borrarSuccess = "vacio";
        
        if(!empty($_POST['borrar'])){//si se solicito borrar algo

            $borrar = $_POST['codigoBorrar'];

            /*$mysqli->real_query("DELETE FROM noticia WHERE codigo=".$borrar);
            $resultado = $mysqli->use_result();
*/
            $sql = "DELETE FROM noticia WHERE codigo=".$borrar;

            if ($conn->query($sql) === TRUE) {
                $borrarSuccess = "si";
            } else {
                $borrarSuccess = "no";
            }

        } else {//si no se trata de un borrado, y en cambio se trata de una insercion

            $codigo = $_POST['codigo'];
            $titulo = $_POST['titulo'];
            $categoria = $_POST['categoria'];
            if(!empty($_POST['destacado'])){
                $destacado = $_POST['destacado'];
            } else {
                $destacado = "of";
            }
            $data = $_POST['editor'];
            
            //Obtiene el inicio desde donde cortar, incluyendo data:image/
            $inicioCortar = strstr($data, 'data:image/');
            $finCortar = strpos($inicioCortar, 'alt=');
            $imagen = substr ($inicioCortar, 0, $finCortar-2); //Codigo cortado
            $imagen = str_replace('data:image/jpeg;base64,', '', $imagen);
            $imagen = str_replace(' ', '+', $imagen);
            $imagen = base64_decode($imagen);   
            $file = '../../img/noticias/'. "$codigo" .'.jpg';
            file_put_contents($file, $imagen);

            //Reemplazar Imagen imagen//
            //Obtiene desde y hasta donde cortar, incluyendo <img
            $inicioReemplazar = strstr($data, '<img');
            $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
            //se obtiene el texto a reemplazar
            $totalAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
            //Se coloca el texto de REEMPLAZO
            $textoReemplazo = '<img style="" src="img/noticias/'. $codigo .'.jpg" class="img-responsive">';
            //Se Reemplaza lo correspondiente
            $stringAMostrar = str_replace($totalAReemplazar, $textoReemplazo, $data);


            $sql = "INSERT INTO noticia (codigo, titulo, cuerpo, categoria, destacado)
            VALUES ('".$codigo."', '".$titulo."', '".$stringAMostrar."', '".$categoria."', '".$destacado."')";

            if ($conn->query($sql) === TRUE) {
                $success = "si";
            } else {
                $success = "no";
            }
        }
    }
    $conn->close();

    //aqui se consulta por el ultimo codigo en bd y se le suma uno para guardar el codigo de noticia
    $mysqli->real_query("SELECT codigo, titulo FROM noticia ORDER BY codigo DESC LIMIT 1");
    $resultado = $mysqli->use_result();
    while ($fila = $resultado->fetch_assoc()) {
        $codigo = $fila['codigo']+1;
        //echo $fila['titulo']. " - ";
    }
?>

<div class="container theme-showcase" role="main">

    <div class="row text-center">
        <img src="../../img/logo.png" class="logo" height="70" width="auto"/>
    </div>
    <!-------------------------- MENU ---------------------------->
    <?php 
        //include '../menu.php';
    ?>
    <!-------------------------- CREAR ARTICULO ---------------------------->
<div class="col-md-12 cuerpoNoticias">

    <form action="editor.php" method="post">
        <?php
            //MENSAJE SI SE CREO O NO UNA NOTICIA NUEVA
            if(!empty($_POST)){//if donde se pregunta si hay request post
                if($success == "si" || $success == "no"){
                    if($success == "si"){
        ?>
                        <div class="alert alert-success col-md-12" role="alert">
                          <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                          <span class="sr-only">Error:</span>
                          ¡Excelente! La Noticia se cre&oacute; con &eacute;xito.
                        </div>
        <?php
                    }else {
        ?>
                        <div class="alert alert-danger col-md-12" role="alert">
                          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                          <span class="sr-only">Error:</span>
                          Ocurri&oacute; un Error al intentar guardar la noticia.
                        </div>
        <?php
                    }
                }
            }//if donde se pregunta si hay request post
        ?>

        <?php
            //MENSAJE SI SE BORRO O NO UNA NOTICIA
            if(!empty($_POST)){//if donde se pregunta si hay request post
                if($borrarSuccess == "si" || $borrarSuccess == "no"){
                    if($borrarSuccess == "si"){
        ?>
                        <div class="alert alert-success col-md-12" role="alert">
                          <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                          <span class="sr-only">Error:</span>
                          ¡Excelente! La Noticia se ELIMIN&Oacute; con &eacute;xito.
                        </div>
        <?php
                    }else {
        ?>
                        <div class="alert alert-danger col-md-12" role="alert">
                          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                          <span class="sr-only">Error:</span>
                          Ocurri&oacute; un Error al intentar eliminar la noticia.
                        </div>
        <?php
                    }
                }
            }//if donde se pregunta si hay request post
        ?>
        <div class="col-md-12 titulo-adm">
            <center><h2>Nueva Noticia</h2></center>
        </div>
        <div class="col-md-6">
                    <div class="form-group">
                            <input type="hidden" name="codigo" value="<?php echo $codigo ?>" />
                            <input type="text" name="titulo" placeholder="Ingrese el T&iacute;tulo" class="form-control input-lg text-center" />
                    </div>
                    <div class="form-group">
                            <!-- <input type="text" name="categoria" placeholder="Ingrese la Categor&iacute;a" class="form-control input-lg text-center" /> -->
                            <select name="categoria" class="form-control"> 
                            <option selected="">
                                -- Seleccione una Categor&iacute;a --
                            </option>
                            <?php
                                //aqui se consulta la Lista de Categorias
                                $mysqli->real_query("SELECT * FROM categoria_noticia ORDER BY id ASC");
                                $resultado = $mysqli->use_result();
                                while ($fila = $resultado->fetch_assoc()) {
                                    $id = $fila['id'];
                                    $descripcion = $fila['descripcion'];
                                    $padre = $fila['padre'];
                                    if($padre == 0){
                            ?>
                                        <option style="font-weight:bold;" VALUE="<?php echo $id; ?>">
                                            <?php echo $descripcion; ?>
                                        </option>  
                            <?php
                                    } else {
                            ?>
                                        <option VALUE="<?php echo $id; ?>">
                                            --- <?php echo $descripcion; ?>
                                        </option>
                            <?php
                                    }
                                }
                            ?>
                            </select>
                    </div>
                    <div class="checkbox">
                        <label>
                          <input name="destacado" type="checkbox"> Destacado?
                        </label>
                    </div>
        </div>

        <div class="editor col-md-6">
              <div style="color:#aa0000; font-weight:bold"></div>
              <textarea id="editor1" name="editor" placeholder="Ingrese aqui el cuerpo de la noticia..." rows="10"></textarea>
        </div>

        <div class="col-md-12 contenido-centrado">
                    <input type="submit" class="btn btn-primary col-offset-6" value="Cargar Noticia"/>
        </div>

    <form>
    <br/>
    <br/>
    <br/>
    <div class="alinear-derecha col-md-12">
        <a href="../logout.php">
            <button type="button" class="btn btn-success align-right" aria-expanded="false">
                Salir del Administrador
            </button>
        </a>
    </div>


</div> <!-- Formulario de nueva noticia -->


<!-- Lista de Noticias -->
<div class="col-md-12 titulo-adm tabla-lista-noticias tabla-lista-noticias">
    <center><h2>Lista Noticias</h2></center>
</div>
<div class="col-md-12 cuerpoNoticias">
        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <td>
                        <strong>#</strong>
                    </td>
                    <td>
                        <strong>C&oacute;digo</strong>
                    </td>
                    <td>
                        <strong>Titulo</strong>
                    </td>
                    <td>
                        <strong>Categor&iacute;a</strong>
                    </td>
                    <td>
                        <strong>Acci&oacute;n</strong>
                    </td>
                </tr>
<?php
    //aqui se consulta por el ultimo codigo en bd y se le suma uno para guardar el codigo de noticia
    //$mysqli->real_query("SELECT codigo, titulo FROM noticia ORDER BY codigo DESC");
    $mysqli->real_query("SELECT n.codigo, n.titulo, c.descripcion FROM noticia n INNER JOIN categoria_noticia c ON c.id = n.categoria ORDER BY n.codigo DESC");
    $resultado = $mysqli->use_result();
    $cont = 0;
    while ($fila = $resultado->fetch_assoc()) {
        $codigo = $fila['codigo'];
        $titulo = $fila['titulo'];
        $descripcion = $fila['descripcion'];
        $cont++;
?>
                <tr>
                    <td>
                        <strong><?php echo $cont; ?></strong>
                    </td>
                    <td>
                        <?php echo $codigo; ?>
                    </td>
                    <td>
                        <strong><?php echo $titulo; ?></strong>
                    </td>
                    <td>
                        <strong><?php echo $descripcion; ?></strong>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="codigoBorrar" value="<?php echo $codigo; ?>"/>
                            <input type="submit" name="borrar" class="btn btn-danger col-offset-6" value="Borrar"/>
                        </form>
                        <!-- <a href="#">Borrar</a> -->
                    </td>
                </tr>
<?php
     }
?>
            </table>
        </div>
</div>

</div><!-- Container General -->
<?php
     $mysqli->close();
?>
</body>
</html>
