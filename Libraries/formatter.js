// Function to format a number with dots as thousands separator
function formatNumber(number) {

    // Replace the decimal point
    var numberNew = number.toString().split(".")[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");

    // replace english point with german comma
    if (number.toString().split(".")[1] != undefined) {
        numberNew = numberNew + "," + number.toString().split(".")[1];
    }

    // return the formatted number
    return numberNew;
}