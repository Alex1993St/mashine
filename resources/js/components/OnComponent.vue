<template>
    <div>
        <emit v-on:event_emit="getEmit"></emit>
        <span v-html="data_from_emit "></span>
    </div>
</template>

<script>
    import Emit from './EmiteComponent';

    export default {
        name: "OnComponent",
        data(){
            return {
                data_from_emit: ''
            }
        },

        components:{
            emit: Emit
        },

        methods: {
            getEmit(data){
                this.data_from_emit = data.title;
                console.log(this.data_from_emit)

            }
        }
    }
</script>

<style scoped>

</style>
