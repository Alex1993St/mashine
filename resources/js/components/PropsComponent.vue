<template>
   <div>
       <h3>
           {{ aboutTitle }}
       </h3>
       <p>
           {{ description.desc }}
       </p>
   </div>

</template>

<script>
    // views->front->about.blade.php

    export default {
        props: ['aboutTitle', 'description']
    }
</script>

<style scoped>

</style>
