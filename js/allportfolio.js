        (function ($) {
            var $container = $('.exoneport'),
                colWidth = function () {
                    var w = $container.width(), 
                        columnNum = 1,
                        columnWidth = 50;
                    if (w > 1200) {
                        columnNum  = 5;
                    } 
                    else if (w > 900) {
                        columnNum  = 4;
                    } 
                    else if (w > 600) {
                        columnNum  = 2;
                    } 
                    else if (w > 300) {
                        columnNum  = 1;
                    }
                    columnWidth = Math.floor(w/columnNum);
                    $container.find('.exoneitem').each(function() {
                        var $item = $(this),
                            multiplier_w = $item.attr('class').match(/item-w(\d)/),
                            multiplier_h = $item.attr('class').match(/item-h(\d)/),
                            width = multiplier_w ? columnWidth*multiplier_w[1]-0 : columnWidth-5,
                            height = multiplier_h ? columnWidth*multiplier_h[1]*1-5 : columnWidth*0.5-5;
                        $item.css({
                            width: width,
                            height: height
                        });
                    });
                    return columnWidth;
                }
                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 3000);   
                }
                $('nav.exonefilter.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });
                function setPortfolio() { 
                    setColumns();
                    $container.isotope('reLayout');
                }
                $container.imagesLoaded( function() {
                    $container.isotope();
                });
                isotope = function () {
                    $container.isotope({
                        resizable: true,
                        itemSelector: '.exoneitem',
                        layoutMode : 'masonry',
                        gutter: 10,
                        masonry: {
                            columnWidth: colWidth(),
                            gutterWidth: 0
                        }
                    });
                };
            isotope();
            $(window).smartresize(isotope);
        }(jQuery));


        (function ($) {
            var $container = $('.extwoport'),
                colWidth = function () {
                    var w = $container.width(), 
                        columnNum = 1,
                        columnWidth = 50;
                    if (w > 1200) {
                        columnNum  = 3;
                    } 
                    else if (w > 900) {
                        columnNum  = 3;
                    } 
                    else if (w > 600) {
                        columnNum  = 2;
                    } 
                    else if (w > 300) {
                        columnNum  = 1;
                    }
                    columnWidth = Math.floor(w/columnNum);
                    $container.find('.extwoitem').each(function() {
                        var $item = $(this),
                            multiplier_w = $item.attr('class').match(/item-w(\d)/),
                            multiplier_h = $item.attr('class').match(/item-h(\d)/),
                            width = multiplier_w ? columnWidth*multiplier_w[1]-0 : columnWidth-5,
                            height = multiplier_h ? columnWidth*multiplier_h[1]*1-5 : columnWidth*0.5-5;
                        $item.css({
                            width: width,
                            height: height
                        });
                    });
                    return columnWidth;
                }
                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 3000);   
                }
                $('nav.extwofilter.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });
                function setPortfolio() { 
                    setColumns();
                    $container.isotope('reLayout');
                }
                $container.imagesLoaded( function() {
                    $container.isotope();
                });
                isotope = function () {
                    $container.isotope({
                        resizable: true,
                        itemSelector: '.extwoitem',
                        layoutMode : 'masonry',
                        gutter: 10,
                        masonry: {
                            columnWidth: colWidth(),
                            gutterWidth: 0
                        }
                    });
                };
            isotope();
            $(window).smartresize(isotope);
        }(jQuery));

        (function ($) {
            var $container = $('.exthreeport'),
                colWidth = function () {
                    var w = $container.width(), 
                        columnNum = 1,
                        columnWidth = 50;
                    if (w > 1200) {
                        columnNum  = 4;
                    } 
                    else if (w > 900) {
                        columnNum  = 4;
                    } 
                    else if (w > 600) {
                        columnNum  = 2;
                    } 
                    else if (w > 300) {
                        columnNum  = 1;
                    }
                    columnWidth = Math.floor(w/columnNum);
                    $container.find('.exthree_item').each(function() {
                        var $item = $(this),
                            multiplier_w = $item.attr('class').match(/item-w(\d)/),
                            multiplier_h = $item.attr('class').match(/item-h(\d)/),
                            width = multiplier_w ? columnWidth*multiplier_w[1]-0 : columnWidth-5,
                            height = multiplier_h ? columnWidth*multiplier_h[1]*1-5 : columnWidth*0.5-5;
                        $item.css({
                            width: width,
                            height: height
                        });
                    });
                    return columnWidth;
                }
                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 3000);   
                }
                $('nav.exthreefilter.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });
                function setPortfolio() { 
                    setColumns();
                    $container.isotope('reLayout');
                }
                $container.imagesLoaded( function() {
                    $container.isotope();
                });
                isotope = function () {
                    $container.isotope({
                        resizable: true,
                        itemSelector: '.exthree_item',
                        layoutMode : 'masonry',
                        gutter: 10,
                        masonry: {
                            columnWidth: colWidth(),
                            gutterWidth: 0
                        }
                    });
                };
            isotope();
            $(window).smartresize(isotope);
        }(jQuery));

        (function ($) {
            var $container = $('.exfourport'),
                colWidth = function () {
                    var w = $container.width(), 
                        columnNum = 1,
                        columnWidth = 50;
                    if (w > 1200) {
                        columnNum  = 3;
                    } 
                    else if (w > 900) {
                        columnNum  = 3;
                    } 
                    else if (w > 600) {
                        columnNum  = 2;
                    } 
                    else if (w > 300) {
                        columnNum  = 1;
                    }
                    columnWidth = Math.floor(w/columnNum);
                    $container.find('.exfour_item').each(function() {
                        var $item = $(this),
                            multiplier_w = $item.attr('class').match(/item-w(\d)/),
                            multiplier_h = $item.attr('class').match(/item-h(\d)/),
                            width = multiplier_w ? columnWidth*multiplier_w[1]-0 : columnWidth-5,
                            height = multiplier_h ? columnWidth*multiplier_h[1]*1-5 : columnWidth*0.5-5;
                        $item.css({
                            width: width,
                            height: height
                        });
                    });
                    return columnWidth;
                }
                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 3000);   
                }
                $('nav.exfourfilter.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });
                function setPortfolio() { 
                    setColumns();
                    $container.isotope('reLayout');
                }
                $container.imagesLoaded( function() {
                    $container.isotope();
                });
                isotope = function () {
                    $container.isotope({
                        resizable: true,
                        itemSelector: '.exfour_item',
                        layoutMode : 'masonry',
                        gutter: 10,
                        masonry: {
                            columnWidth: colWidth(),
                            gutterWidth: 0
                        }
                    });
                };
            isotope();
            $(window).smartresize(isotope);
        }(jQuery));

        (function ($) {
            var $container = $('.exfiveport'),
                colWidth = function () {
                    var w = $container.width(), 
                        columnNum = 1,
                        columnWidth = 50;
                    if (w > 1200) {
                        columnNum  = 3;
                    } 
                    else if (w > 900) {
                        columnNum  = 3;
                    } 
                    else if (w > 600) {
                        columnNum  = 2;
                    } 
                    else if (w > 300) {
                        columnNum  = 1;
                    }
                    columnWidth = Math.floor(w/columnNum);
                    $container.find('.exfive_item').each(function() {
                        var $item = $(this),
                            multiplier_w = $item.attr('class').match(/item-w(\d)/),
                            multiplier_h = $item.attr('class').match(/item-h(\d)/),
                            width = multiplier_w ? columnWidth*multiplier_w[1]-0 : columnWidth-5,
                            height = multiplier_h ? columnWidth*multiplier_h[1]*1-5 : columnWidth*0.5-5;
                        $item.css({
                            width: width,
                            height: height
                        });
                    });
                    return columnWidth;
                }
                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 3000);   
                }
                $('nav.exfivefilter.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });
                function setPortfolio() { 
                    setColumns();
                    $container.isotope('reLayout');
                }
                $container.imagesLoaded( function() {
                    $container.isotope();
                });
                isotope = function () {
                    $container.isotope({
                        resizable: true,
                        itemSelector: '.exfive_item',
                        layoutMode : 'masonry',
                        gutter: 10,
                        masonry: {
                            columnWidth: colWidth(),
                            gutterWidth: 0
                        }
                    });
                };
            isotope();
            $(window).smartresize(isotope);
        }(jQuery));

        (function ($) {
            var $container = $('.exsixport'),
                colWidth = function () {
                    var w = $container.width(), 
                        columnNum = 1,
                        columnWidth = 50;
                    if (w > 1200) {
                        columnNum  = 4;
                    } 
                    else if (w > 900) {
                        columnNum  = 3;
                    } 
                    else if (w > 600) {
                        columnNum  = 2;
                    } 
                    else if (w > 300) {
                        columnNum  = 1;
                    }
                    columnWidth = Math.floor(w/columnNum);
                    $container.find('.exitem_six').each(function() {
                        var $item = $(this),
                            multiplier_w = $item.attr('class').match(/item-w(\d)/),
                            multiplier_h = $item.attr('class').match(/item-h(\d)/),
                            width = multiplier_w ? columnWidth*multiplier_w[1]-0 : columnWidth-5,
                            height = multiplier_h ? columnWidth*multiplier_h[1]*1-5 : columnWidth*0.5-5;
                        $item.css({
                            width: width,
                            height: height
                        });
                    });
                    return columnWidth;
                }
                function refreshWaypoints() {
                    setTimeout(function() {
                    }, 3000);   
                }
                $('nav.exsixfilter.portfolio-filter ul a').on('click', function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({ filter: selector }, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });
                function setPortfolio() { 
                    setColumns();
                    $container.isotope('reLayout');
                }
                $container.imagesLoaded( function() {
                    $container.isotope();
                });
                isotope = function () {
                    $container.isotope({
                        resizable: true,
                        itemSelector: '.exitem_six',
                        layoutMode : 'masonry',
                        gutter: 10,
                        masonry: {
                            columnWidth: colWidth(),
                            gutterWidth: 0
                        }
                    });
                };
            isotope();
            $(window).smartresize(isotope);
        }(jQuery));