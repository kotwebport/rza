$("document").ready(function () {
    $('.js-getAjax').on('click', function () {
        var id = $(this).data('id');
        var url = '?r=' + $(this).data('url');
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
            data: {
                'id': id
            },
            success: function (res) {
                $('.js-section').html(res);
                $('.test-box').css("display", "block");
            },
            error: function () {
                alert('Сбой передачи');
            }
        });
        return false;
    });


    $('.js-section').on('click', '.js-getAjax', function () {
        var id = $(this).data('id');
        var url = '?r=' + $(this).data('url');
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
            data: {
                'id': id
            },
            success: function (res) {
                $('.js-test').html(res);
                $('.test-box').css("display", "none");
            },
            error: function () {
                alert('Сбой передачи');
            }
        });
        return false;
    });

    $('.js-section').on('click', '.question', function () {
        $('.answer').css('display', 'none');
        $(this).next('.answer').css('display', 'block');
        $('.question').css('display', 'none');
    });

    $('.js-section').on('click', '.answer-close', function () {
		$('.answer').css('display', 'none');
        //$(this).parent().css('display', 'none');
        $('.question').css('display', 'block');
    });


	
	
	
	
    $('.archive').on('click', function () {
        $('.js_start').css('display', 'none');
        $(this).parent().next().css('display', 'block');
        $('#close').css('visibility', 'visible')
    });

    $('#close').on('click', function () {
        $('div.archiveQuestion').css('display', 'none');
        $('.js_start').css('display', 'block');
        $(this).css('visibility', 'hidden');
    });

    $('.img').on('mouseenter', function () {
        var zoom = 50;
        $(this).css('cursor', 'zoom-in');
        $(this).on('click', function () {
            zoom = zoom + 25;
            var width = zoom + '%';
            $(this).css('width', width);
        });
    });

    $('.img').on('mouseleave', function () {
        $(this).css('width', '50%');
    });

    $('.js_start').on('mouseenter', '.img', function () {
        var zoom = 50;
        $(this).css('cursor', 'zoom-in');
        $(this).on('click', function () {
            zoom = zoom + 25;
            var width = zoom + '%';
            $(this).css('width', width);
        });
    });

    $('.js_start').on('mouseleave', '.img', function () {
        $(this).css('width', '50%');
    });


});

