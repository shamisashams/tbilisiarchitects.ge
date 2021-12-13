$(".news_vertical_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    arrows: true,
    prevArrow: "#prev_news",
    nextArrow: "#next_news",
    dots: true,
    speed: 900,
    infinite: true,
    touchThreshold: 100,
    variableHeights: true,
    vertical: true,
    responsive: [
        {
            breakpoint: 1050,
            settings: {
                vertical: false,
            },
        },
    ],
});
$(".project_details_slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    draggable: true,
    arrows: true,
    prevArrow: "#prev_content",
    nextArrow: "#next_content",
    dots: false,
    speed: 400,
    infinite: true,
    touchThreshold: 100,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 1,
            },
        },
    ],
});
