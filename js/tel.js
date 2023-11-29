document.getElementById('campo5').addEventListener('input', function (e) {
    let tel = e.target.value.replace(/\D/g, '');
    if (tel.length > 0) {
        tel = '(' + tel.substring(0, 2) + ') ' + tel.substring(2);
    }
    if (tel.length > 4) {
        tel = tel.substring(0, 10) + '-' + tel.substring(10, 14);
    }
    e.target.value = tel.substring(0, 16);
});
