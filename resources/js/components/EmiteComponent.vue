<template>

</template>

<script>
    export default {
        name: "EmiteCompontn",
        data(){
            return {
                emit_data: {
                    'title': '<h1>Contact</h1>'
                }
            }
        },

        created(){
            this.$emit('event_emit', this.emit_data);
        }
    }
</script>

<style scoped>

</style>
