import axios from 'axios'

$(document).ready(function () {
    let body = $(document.body);
    let htmlEditor = ace.edit("htmlEditor");
    let textarea = $('textarea[name="htmlEditor"]');
    let result = document.getElementById('outputIframe').contentWindow.document;

    if (body.hasClass('darkTheme')) {
        htmlEditor.setTheme("ace/theme/monokai");
    } else {
        htmlEditor.setTheme("ace/theme/chrome");
    }

    htmlEditor.session.setMode("ace/mode/php");
    textarea.val(htmlEditor.getSession().getValue());
    UpdateIframe(textarea, result);

    htmlEditor.getSession().on("change", function () {
        textarea.val(htmlEditor.getSession().getValue());
    });

    $('#editorRunButton').click(function () {
        UpdateIframe(textarea, result);
        CheckCode(textarea, textarea.data('lessonid'), function(err, data) {
            if (err) return console.error(err);
            if (data.message != null && data.answerCorrect != null && data.answerCorrect === true) {
                alert("Success!");
            } else if (data.message != null && data.answerCorrect != null && data.answerCorrect === false){
                alert("Failed!\n" + data.message);
            } else {
                alert("Error occurred. Please try reloading the page.");
            }
        });
    });

    $('.themeSwitch').click(function (e) {
        e.preventDefault();
        let body = $(document.body);

        setTimeout(function () {
            if (body.hasClass('darkTheme')) {
                htmlEditor.setTheme("ace/theme/monokai");
            } else {
                htmlEditor.setTheme("ace/theme/chrome");
            }
        }, 100);
    });

});

function UpdateIframe(a_textarea, a_doc) {
    a_doc.open();
    a_doc.write(a_textarea.val());
    a_doc.close();
}

function CheckCode(a_textarea, a_lessonId, callback) {
    axios.post('/verifyLesson/' + a_lessonId, {
        lesson: a_lessonId,
        answer: a_textarea.val()
    }).then(function(data) {
        if (data.data != null) {
            callback(null, data.data);
        } else {
            callback("No data was received from the API", null);
        }
    }).catch(function(err) {
        callback("Something went wrong trying to check your answer.\nPlease try again later", null);
    });
}
