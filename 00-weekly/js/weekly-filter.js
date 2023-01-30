filterNavTree();

function filterNavTree() {

    let week = 5;
    for (week; week <= 9; week++) {
        $ (`li[data-nav-id^="/0${week}"]`).each(function (i, el) {
            $(el).remove();
         });
    }
}
