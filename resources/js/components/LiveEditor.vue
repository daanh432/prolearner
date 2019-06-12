<template>
    <div v-bind:class="{ lessonEditorContainer: lesson != null && lesson.description != null, sandboxEditorContainer: lesson == null}">
        <div class="editorHeaderBackground secondaryText text-center" id="lessonAssignmentTitle" v-if="lesson != null && lesson.name != null && chapter != null && chapter.name != null && course != null && course.name != null">
            <h1>{{ lesson.name }}</h1>
            <p>{{ chapter.name }} - {{ course.name }}</p>
        </div>

        <div class="editorHeaderBackground text-center" id="menuHeader">
            <!--            <div class="btn-group btn-group mt-4">-->
            <!--                <button @click="UpdateLang('php')" class="btn btn-primary" type="button">PHP</button>-->
            <!--                <button @click="UpdateLang('html')" class="btn btn-primary" type="button">HTML</button>-->
            <!--                <button @click="UpdateLang('css')" class="btn btn-primary" type="button">CSS</button>-->
            <!--                <button @click="UpdateLang('javascript')" class="btn btn-primary" type="button">JS</button>-->
            <!--            </div>-->
        </div>

        <div class="editorHeaderBackground secondaryText text-center" id="outputHeader">
            <h1 class="mt-3">Output:</h1>
        </div>

        <div class="editorBackground secondaryText" id="lessonAssignmentDescription" v-if="lesson != null && lesson.description != null" v-html="lesson.description"></div>

        <ace-editor class="liveEditorLesson" editor-id="MainEditor" v-bind:content="MainEditor.content" v-bind:lang="MainEditor.lang" v-bind:theme="theme" v-on:change-content="ChangeEditorContent"></ace-editor>
        <input type="hidden" class="shortcutCheck" v-model="MainEditor.content" name="MainEditorContent"/>

        <div class="text-right">
            <div class="secondaryText text-right mr-2 d-inline-block" v-if="correct === false">
                <p class="text-danger">Incorrect!</p>
            </div>
            <div class="secondaryText text-right d-inline-block" v-if="correct !== true">
                <button @click="RunCode(true)" class="btn btn-primary">Run</button>
            </div>
            <div class="secondaryText text-right d-block" v-if="correct === true">
                <p class="d-inline-block text-success mr-1">Correct!</p>
                <button @click="NextLesson" class="btn btn-primary shortcutButton">Continue</button>
            </div>
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
                nextLessonUrl: '',
                correct: null,
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
                    window.changedFlag = true;
                }
            },
            UpdateLang: function (a_lang) {
                this.MainEditor.lang = a_lang;
            },
            RunCode: function (a_validateAnswer) {
                this.$refs.outputIframe.contentWindow.document.open();
                axios.post('/runCode', {
                    'rawCode': this.MainEditor.content
                }).then(data => {
                    if (data.data.error === "No" && data.data.success === "Yes") {
                        this.$refs.outputIframe.contentWindow.document.write(data.data.message);
                    }
                });
                this.$refs.outputIframe.contentWindow.document.close();
                if (this.lesson != null && this.lesson.id != null && a_validateAnswer === true) this.ValidateAnswer();
            },
            ValidateAnswer: function () {
                let vm = this;
                axios.post('/verifyLesson/' + this.lesson.id, {
                    lesson: this.lesson.id,
                    answer: this.MainEditor.content
                }).then(function (data) {
                    if (data.data != null) {
                        if (data.data.answerCorrect != null && data.data.answerCorrect === true) {
                            vm.correct = true;
                            // document.getElementById('editorNext').style.display = "block";
                            // document.getElementById('editorRun').style.display = "none";
                            // document.getElementById('editorIncorrect').style.display = "none";
                            vm.nextLessonUrl = data.data.nextLesson;
                        } else {
                            vm.correct = false;
                            // document.getElementById('editorNext').style.display = "none";
                            // document.getElementById('editorRun').style.display = "inline-block";
                            // document.getElementById('editorIncorrect').style.display = "inline-block";
                        }
                    } else {
                        console.error("No data was received from the API");
                    }
                }).catch(function (err) {
                    console.error("Something went wrong trying to check your answer.\nPlease try again later");
                });
            },
            NextLesson: function () {
                window.changedFlag = false;
                window.location = this.nextLessonUrl;
            }
        }
    }
</script>
