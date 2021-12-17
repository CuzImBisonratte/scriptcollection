function formatNumber(number) {
    var numberNew = number.toString().split(".")[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    if (number.toString().split(".")[1] != undefined) {
        numberNew = numberNew + "," + number.toString().split(".")[1];
    }
    return numberNew;
}