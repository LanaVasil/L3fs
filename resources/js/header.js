$(function () {
    console.log("123");

    // ==================Header====================
    $("#search-form-btn").on("click", function (e) {
        e.preventDefault();
        let form = $(this).parent();
        let inputSearch = form.find(".form-control");
        // показати поле Пошуку та встановити на нього фокус
        inputSearch.toggleClass("show").focus();

        // перевірка - є що шукати, тоді відправити форму
        if (inputSearch.val()) {
            form.submit();
        }
    });

    // ==================/ Header====================
});
