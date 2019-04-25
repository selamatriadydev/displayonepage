$("#boxx").keypress(function() {
    var $this= $(this);
    window.setTimeout(function() {
       $("div").text($this.val());
    }, 0);
});