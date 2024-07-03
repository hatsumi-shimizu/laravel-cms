'use strict';

$(function () {
    $('#img-wrap img:nth-child(n+2)').hide();
        setInterval(function() {
          $("#img-wrap img:first-child").fadeOut(2000);
          $("#img-wrap img:nth-child(2)").fadeIn(2000);
          $("#img-wrap img:first-child").appendTo("#img-wrap");
        }, 4000);
});

$(function () {
    $("#up-arrow").click(function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
    });
});

{
    document.getElementById('delete_post').addEventListener('submit', e => {
        e.preventDefault();

        if (!confirm('Sure to delete?')) {
            return;
        }

        e.target.submit();
    });
}
