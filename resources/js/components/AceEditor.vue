<template>
    <div :id="editorId" style="width: 100%; height: 100%;"></div>
</template>
<script>
    export default {
        props: ['editorId', 'content', 'lang', 'theme'],
        data() {
            return {
                editor: Object,
                beforeContent: ''
            }
        },
        watch: {
            'content': function (a_val) {
                if (this.beforeContent !== a_val) {
                    this.editor.setValue(a_val, 1);
                }
            },
            'lang': function (a_val) {
                this.editor.getSession().setMode(`ace/mode/${a_val}`);
            },
            'theme': function (a_val) {
                this.editor.setTheme(`ace/theme/${a_val}`);
            }
        },
        mounted() {
            const lang = this.lang || 'text';
            const theme = this.theme || 'github';

            this.editor = window.ace.edit(this.editorId);
            this.editor.setValue(this.content, 1);

            this.editor.getSession().setMode(`ace/mode/${lang}`);
            this.editor.setTheme(`ace/theme/${theme}`);

            this.editor.on('change', () => {
                this.beforeContent = this.editor.getValue();
                this.$emit('change-content', this.editor.getValue());
            })
        }
    }
</script>
