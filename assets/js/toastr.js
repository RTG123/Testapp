$(document).ready(function () {
    $(".tst1").on("click", function () {
        $.toast({
            heading: 'ERROR',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3000,
            stack: 6
        });

    });

    $(".tst2").on("click", function () {
        $.toast({
            heading: 'ERROR',
            text: 'The date approved should be earlier than the date done. ',
            position: 'top-right',
            loaderBg: 'red',
            icon: 'warning',
            bgColor: '#f57d7a',
            hideAfter: 3500,
            stack: 6
        });

    });
    $(".tst3").on("click", function () {
        $.toast({
            heading: 'Welcome to my Elite admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });

    });

    $(".tst4").on("click", function () {
        $.toast({
            heading: 'Welcome to my Elite admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 3500

        });

    });


});
