$(function () {
    function AutoFitVideo() {
        var contentWidth = $('.content').innerWidth(),
            videoContainer = $('.video>iframe');

        videoContainer.css({
            height: 9 * contentWidth / 16 + 'px'
        });
    }
    AutoFitVideo();
});
