$(document).ready(function () {
    let htmlEditor = ace.edit("htmlEditor");
    let textarea = $('textarea[name="htmlEditor"]');
    let result = document.getElementById('outputIframe').contentWindow.document;
    htmlEditor.setTheme("ace/theme/monokai");
    htmlEditor.session.setMode("ace/mode/php");
    textarea.val(htmlEditor.getSession().getValue());
    updateIframe(textarea, result);

    htmlEditor.getSession().on("change", function () {
        textarea.val(htmlEditor.getSession().getValue());
    });

    $('#editorRunButton').click(function () {
        updateIframe(textarea, result)
    });
});

function updateIframe(a_textarea, a_doc) {
    a_doc.open();
    a_doc.write(a_textarea.val());
    a_doc.close();
}
