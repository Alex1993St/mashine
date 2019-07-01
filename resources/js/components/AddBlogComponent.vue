<template>
    <div id="app">
        <form class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" v-model="blog.title" name="title" v-validate="'required'" data-vv-as="Title">
                    <span>{{ errors.first('title') }}</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Short text" v-model="blog.short_text" name="short_text" v-validate="'required'" data-vv-as="Short text">
                    <span>{{ errors.first('short_text') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="description" v-model="blog.description" class="form-control" cols="30" rows="7" placeholder="Description" v-validate="'required'" data-vv-as="Description"></textarea>
                    <span>{{ errors.first('description') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type='file' name="img" class="form-control" v-validate="'required'" ref="file" data-vv-as="Image" v-on:change="uploadFile">
                    <span>{{ errors.first('img') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input value="Отправить" class="btn btn-primary btn-modify" @click="send()">
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "AddBlogComponent",
        data: () => ({
                blog: {
                    title: '',
                    description: '',
                    short_text: '',
                    img: '',

                }
        }),

        methods:{
            send(){
               this.$validator.validateAll().then(valid => {
                   if(valid){
                       console.log('axios');
                   }else {
                       console.log('err');
                   }
               })
            },

            uploadFile(){
                this.blog.img = this.$refs.file.files[0];
                console.log(this.blog.img);
            }
        },

    }
</script>

<style scoped>

</style>
