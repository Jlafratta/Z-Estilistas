Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
});

let date = document.getElementById('date');
let date2 = document.getElementById('date2');

date.value = new Date().toDateInputValue();
date2.value = new Date().toDateInputValue();

