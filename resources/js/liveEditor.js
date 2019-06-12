import Vue from 'vue'
import LiveEditor from './components/LiveEditor'
import AceEditor from './components/AceEditor'

if ($('#liveEditorApp').length) {
    let vueVM = new Vue({
        el: '#liveEditorApp',
        data() {
            return {
                'theme': 'monokai'
            }
        },
        components: {
            LiveEditor,
        },
    });

    InitTheme(vueVM);

    $('.themeSwitch').click(function (e) {
        e.preventDefault();
        let body = $(document.body);

        setTimeout(function () {
            if (body.hasClass('darkTheme')) {
                vueVM.theme = 'monokai';
            } else {
                vueVM.theme = 'chrome';
            }
        }, 100);
    });
}

if ($('#pureLiveEditorApp').length) {
    let appDiv = $('#pureLiveEditorApp');
    console.log(appDiv.attr('data-assignment'));
    console.log(appDiv.attr('data-input-check'));
    let vueVM = new Vue({
        el: '#pureLiveEditorApp',
        components: {
            AceEditor
        },
        data() {
            return {
                'theme': 'monokai',
                MainEditor: {
                    'lang': null,
                    'content': appDiv.attr('data-assignment')
                },
                SecondaryEditor: {
                    'content': appDiv.attr('data-input-check')
                }
            }
        },
        created() {
            this.CreateEditor();
        },
        methods: {
            CreateEditor: function () {
                this.MainEditor.lang = "php";
                this.MainEditor.theme = window.customTheme;
            },
            ChangeEditorContent: function (a_val) {
                if (this.MainEditor.content !== a_val) {
                    this.MainEditor.content = a_val;
                }
            },
            ChangeEditorContent2: function (a_val) {
                if (this.SecondaryEditor.content !== a_val) {
                    this.SecondaryEditor.content = a_val;
                }
            },
            UpdateLang: function (a_lang) {
                this.MainEditor.lang = a_lang;
            }
        }
    });

    InitTheme(vueVM);

    $('.themeSwitch').click(function (e) {
        e.preventDefault();
        let body = $(document.body);

        setTimeout(function () {
            if (body.hasClass('darkTheme')) {
                vueVM.theme = 'monokai';
            } else {
                vueVM.theme = 'chrome';
            }
        }, 100);
    });
}

function InitTheme(a_vm) {
    let body = $(document.body);

    setTimeout(function () {
        if (body.hasClass('darkTheme')) {
            a_vm.theme = 'monokai';
        } else {
            a_vm.theme = 'chrome';
        }
    }, 100);
}

window.onbeforeunload = function (e) {
    // Cancel the event
    e.preventDefault();

    // Chrome requires returnValue to be set
    e.returnValue = 'Really want to quit the game?';
};

//Prevent Ctrl+S (and Ctrl+W for old browsers and Edge)
document.onkeydown = function (e) {
    e = e || window.event;//Get event

    if (!e.ctrlKey) return;

    var code = e.which || e.keyCode;//Get key code

    switch (code) {
        case 83://Block Ctrl+S
        case 87://Block Ctrl+W -- Not work in Chrome and new Firefox
            e.preventDefault();
            e.stopPropagation();
            break;
    }
};
