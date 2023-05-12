const root = $('#root');
root.html(loading);

$(() => {
    setTimeout(() => {
        const outer = document.querySelector('.outer');
        const inner = document.querySelector('.inner');
        outer.innerHTML = '<animate id="animate1" attributeName="r" values ="40;2000" begin="0s" dur="10s" fill="freeze" /><animate id="animate2" attributeName="opacity" values="1;0;0" begin="0s" dur="1s" repeatCount="1" fill="freeze"/>';
        inner.innerHTML = '<animate id="animate3" attributeName="r" values ="40;1800" begin="0s" dur="10s" fill="freeze" /><animate id="animate4" attributeName="opacity" values="1;0;0" begin="0s" dur="1s" repeatCount="1" fill="freeze"/>';
        document.getElementById('animate1').beginElement();
        document.getElementById('animate2').beginElement();
        document.getElementById('animate3').beginElement();
        document.getElementById('animate4').beginElement();
        $('#loading-text').css('animation', 'fadeout 1s linear 1 forwards');
        setTimeout(() => {
            root.html(title);

            $('.center').on('mouseover', () => {
                $('.outer').removeClass('fade-in');
                $('.outer').addClass('outer-spin');
            });
            $('.center').on('mouseout', () => {
                $('.outer').removeClass('pause');
            })
        }, 2000);
    }, [2000])
});

