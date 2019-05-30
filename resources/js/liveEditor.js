$(document).ready(function () {
    let htmlEditor = ace.edit("htmlEditor");
    let textarea = $('textarea[name="htmlEditor"]');
    let result = $('#output');
    htmlEditor.setTheme("ace/theme/monokai");
    htmlEditor.session.setMode("ace/mode/php");

    htmlEditor.getSession().on("change", function () {
        textarea.val(htmlEditor.getSession().getValue());
        result.html(textarea.val());
    });
});
