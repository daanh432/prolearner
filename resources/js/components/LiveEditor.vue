<template>
    <div v-bind:class="{ lessonEditorContainer: lesson != null && lesson.description != null, sandboxEditorContainer: lesson == null}">
        <div class="editorHeaderBackground secondaryText text-center" id="lessonAssignmentTitle" v-if="lesson != null && lesson.name != null && chapter != null && chapter.name != null && course != null && course.name != null">
            <h1>{{ lesson.name }}</h1>
            <p>{{ chapter.name }} - {{ course.name }}</p>
        </div>

        <div class="editorHeaderBackground text-center" id="menuHeader">
            <div class="btn-group btn-group mt-4">
                <button @click="UpdateLang('php')" class="btn btn-primary" type="button">PHP</button>
                <button @click="UpdateLang('html')" class="btn btn-primary" type="button">HTML</button>
                <button @click="UpdateLang('css')" class="btn btn-primary" type="button">CSS</button>
                <button @click="UpdateLang('javascript')" class="btn btn-primary" type="button">JS</button>
            </div>
        </div>

        <div class="editorHeaderBackground secondaryText text-center" id="outputHeader">
            <h1 class="mt-3">Output:</h1>
        </div>

        <div class="editorBackground secondaryText" id="lessonAssignmentDescription" v-if="lesson != null && lesson.description != null">
            {{ lesson.description }}
        </div>

        <ace-editor class="liveEditorLesson" editor-id="MainEditor" v-bind:content="MainEditor.content" v-bind:lang="MainEditor.lang" v-bind:theme="theme" v-on:change-content="ChangeEditorContent"></ace-editor>

        <div class="secondaryText text-right" id="editorRun">
            <button @click="RunCode(true)" class="btn btn-primary">Run</button>
        </div>

        <div id="output">
            <iframe frameborder="0" ref="outputIframe" style="width: 100%; height: 99%; margin: 0; padding: 0;" @init="RunCode"></iframe>
        </div>
    </div>
</template>

<script>
    import AceEditor from './AceEditor'

    export default {
        props: ['lesson', 'chapter', 'course', 'theme'],
        data: function () {
            return {
                MainEditor: {
                    'lang': null,
                    'content': ''
                }
            }
        },
        components: {
            AceEditor
        },
        created() {
            window.addEventListener('load', () => {
                // run after everything is in-place
                this.CreateEditor();
                this.RunCode(false);
            });
        },
        methods: {
            CreateEditor: function () {
                this.MainEditor.lang = "php";
                if (this.lesson != null && this.lesson.assignment != null) {
                    this.MainEditor.content = this.lesson.assignment;
                } else {
                    this.MainEditor.content = "<html>\n<head>\n    <title>Test Template</title>\n</head>\n<style>\nhtml, body {\n    background: white;\n}\n</style>\n<body>\n    <h1>Start coding here.</h1>\n</body>\n</html>";
                }
            },
            ChangeEditorContent: function (a_val) {
                if (this.MainEditor.content !== a_val) {
                    this.MainEditor.content = a_val;
                }
            },
            UpdateLang: function (a_lang) {
                this.MainEditor.lang = a_lang;
            },
            RunCode: function (a_validateAnswer) {
                this.$refs.outputIframe.contentWindow.document.open();
                this.$refs.outputIframe.contentWindow.document.write(this.MainEditor.content);
                this.$refs.outputIframe.contentWindow.document.close();
                if (this.lesson != null && this.lesson.id != null && a_validateAnswer === true) this.ValidateAnswer();
            },
            ValidateAnswer: function () {
                axios.post('/verifyLesson/' + this.lesson.id, {
                    lesson: this.lesson.id,
                    answer: this.MainEditor.content
                }).then(function (data) {
                    if (data.data != null) {
                        if (data.data.answerCorrect != null && data.data.answerCorrect === true) {
                            alert('Correct answer');
                        } else {
                            alert('Incorrect answer');
                        }
                    } else {
                        console.error("No data was received from the API");
                    }
                }).catch(function (err) {
                    console.error("Something went wrong trying to check your answer.\nPlease try again later");
                });
            }
        }
    }
</script>